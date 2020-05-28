<?php

namespace App\Http\Controllers;

use App\User;
use App\Paycheck;
use Illuminate\Http\Request;

class PaycheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.paychecks');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::orderBy('name','asc')->get();
        return view('dashboard.paycheck-new', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paycheck  $paycheck
     * @return \Illuminate\Http\Response
     */
    public function show(Paycheck $paycheck)
    {
        //
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
