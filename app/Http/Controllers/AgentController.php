<?php

namespace App\Http\Controllers;

use App\Agent;
use App\User;
use App\Note;
use App\Event;
use App\Paycheck;
use App\DirectDepositInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Repositories\AgentRepositoryInterface;

class AgentController extends Controller
{
    protected $_agent;

    /**
     * Agent Controller constructor 
     * 
     */

    public function __construct(AgentRepositoryInterface $agent)
    {
        $this->_agent = $agent;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = Agent::orderBy('id','desc')->paginate(10);
        
        return view('dashboard.agents', compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.agent-new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string|unique:users',
            'password' => 'required|string'
        ];

        $this->validate($request, $rules);

        $username = User::username($request->email);
        $user = User::create([
            'name' => $request->first_name.' '.$request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'username' => $username,
            'account_type' => 1,
            'date_of_birth' => $request->dob
        ]);

        $data = $request->all();

        $address = (object) [   
            "city" => $request->city, 
            "state" => $request->state,
            "zip_code" => $request->zip_code,
            "country" => "United States",
        ];
        $address =  json_encode($address);

        $data['user_id'] = $user->id;
        $data['address'] = $address;
        $agent = $this->_agent->create($data);

        // # Create Direct Deposit Information
        if($agent){
            $directDepositInfo = DirectDepositInfo::create([
                'user_id' => $user->id,
                'bank_name' => $request->bank_name,
                'account_name' => $request->account_name,
                'account_no' => $request->account_no,
                'routing_no' => $request->routing_no
            ]);
        }

        $success = "Agent Created";

        return redirect( route('agents.show', ['agent' => $agent->id]) )->with(['data' => $success]);
        
    }

    /**
     * Return Lastest Agent Id.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */

    public function getLastAgentNumber()
    {
        $lastAgent = Agent::orderBy('id','asc')->get('id')->last();
        return response()->json($lastAgent['agent_number']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function show(Agent $agent)
    {

        $notes = Note::orderBy('id','desc')->where('agent_id', $agent->id )->take(5)->get();
        $events = Event::orderBy('id','desc')->where('user_id', $agent->user_id )->take(5)->get();
        $directDepositInfo = DirectDepositInfo::where('user_id', $agent->user_id)->first();
        $agent['address'] = json_decode($agent->address);

        return view('dashboard.agent-view', compact('agent', 'notes', 'events', 'directDepositInfo'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function dashboard(Agent $agent)
    {
        $directDepositInfo = DirectDepositInfo::where('user_id', $agent->user_id)->first();
        $notes = Note::orderBy('id','desc')->paginate(15);
        $paychecks = Paycheck::orderBy('id','desc')->where('agent_id', $agent->id )->take(10)->get();
        $agent['address'] = json_decode($agent->address);

        return view('dashboard.agent-dashboard', compact('agent', 'notes', 'paychecks', 'directDepositInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit(Agent $agent)
    {
        $agent['address'] = json_decode($agent->address);
        $directDepositInfo = DirectDepositInfo::where('user_id', $agent->user_id)->first();
        return view('dashboard.agent-edit', compact('agent', 'directDepositInfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agent $agent)
    {
        $username = User::username($request->email);
        $user = User::find($agent->user_id);
        $user->name = $request->first_name.' '.$request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->username = $username;
        $user->date_of_birth = $request->dob;
        $user->save();

        $address = (object) [   
            "city" => $request->city, 
            "state" => $request->state,
            "zip_code" => $request->zip_code,
            "country" => "United States",
        ];
        $address =  json_encode($address);

        $data = $request->all();
        $data['address'] = $address;
        $data = $this->_agent->updateAgent($data);

        $success = "Agent Updated";

        return redirect( route('agents.show', ['agent' => $agent->id]) )->with(['data' => $success]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agent $agent)
    {
        $user = User::find($agent->user_id)->delete();
        $agent = $agent->delete();

        $success = "Agent Deleted";

        return redirect( route('agents.index') )->with(['data' => $success]);
    }
}
