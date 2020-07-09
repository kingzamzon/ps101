<?php

namespace App\Http\Controllers;

use App\Agent;
use App\User;
use App\Note;
use App\Event;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        $data['user_id'] = $user->id;
        $agent = $this->_agent->create($data);
        $success = "Agent Created";

        return redirect( route('agents.show', ['agent' => $agent->id]) )->with(['data' => $success]);
        
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

        return view('dashboard.agent-view', compact('agent', 'notes', 'events'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit(Agent $agent)
    {
        return view('dashboard.agent-edit', compact('agent'));
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

        $agent = Agent::find($agent->id);
        $agent->tel = $request->tel;
        $agent->save();

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
