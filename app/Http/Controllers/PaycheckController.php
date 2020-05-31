<?php

namespace App\Http\Controllers;

use App\User;
use App\Agent;
use App\Paycheck;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PaycheckController extends Controller
{
    /**
     * Create a new controller instance.
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->account_type == 0){
            $paychecks = Paycheck::orderBy('id','desc')->paginate(10);
        }else {
            $paychecks = Paycheck::orderBy('id','desc')->where('agent_id', auth()->user()->agent->id )->paginate(10);
        }

        return view('dashboard.paychecks', compact('paychecks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agents = Agent::orderBy('id','asc')->get();
        return view('dashboard.paycheck-new', compact('agents'));
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
            'agent_id' => 'required|integer',
            'paycheck_date' => 'required',
            'deposit_no' => 'required',
            'deposit_date' => 'required'
        ];

        $this->validate($request, $rules);

        $paycheck_date = new Carbon($request->paycheck_date);
        $paycheck_date = $paycheck_date->toDateTimeString();
        $deposit_date = new Carbon($request->deposit_date);
        $deposit_date = $deposit_date->toDateTimeString();

        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        $data['paycheck_date'] = $paycheck_date;
        $data['deposit_date'] = $deposit_date;

        $data = Paycheck::create($data);

        $success = "Paycheck Created";
        return redirect( route('paychecks.show', ['paycheck' => $data->id]) )->with(['data' => $success]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paycheck  $paycheck
     * @return \Illuminate\Http\Response
     */
    public function show(Paycheck $paycheck)
    {
        return view('dashboard.paycheck-view', compact('paycheck'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paycheck  $paycheck
     * @return \Illuminate\Http\Response
     */
    public function edit(Paycheck $paycheck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paycheck  $paycheck
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paycheck $paycheck)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paycheck  $paycheck
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paycheck $paycheck)
    {
        //
    }
}
