<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class CalendarController extends Controller
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
        // return route('events.show');
        return view('dashboard.calendar');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return '00';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }

    public function calendar_data()
    {
        if(auth()->user()->account_type == 0)
        {
            $public_events = Event::orderBy('id','desc')->get();
            $public_events['url'] = 'http://127.0.0.1:8000/events/';
            return response()->json(['public_event' => $public_events]);
        }else {
            $public_events = Event::orderBy('id','desc')->where('user_id', NULL)->get();
            $private_events = Event::orderBy('id','desc')->where('user_id',auth()->user()->id)->get();
            $public_events['url'] = 'http://127.0.0.1:8000/events/';
            return response()->json(['public_event' => $public_events, 'private_event' => $private_events]);
        }
    }
}
