<?php

namespace App\Http\Controllers;

use App\Event;
use App\Contact;
use App\Company;
use App\User;
use App\Agent;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $contacts = Contact::orderBy('full_name','asc')->get();
        // $companys = Company::orderBy('name','asc')->get();
        $users = Agent::orderBy('id','asc')->get();

        return view('dashboard.event-new', compact('users'));
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
            'title' => 'required|string',
            'category' => 'required|string',
            'start_date' => 'required|string',
            'length' => 'required|string'
        ];

        $this->validate($request, $rules);


        $data = [
            'title' => $request->title,
            'category' => $request->category,
            'created_by' => auth()->user()->id,
            'user_id' => $request->user,
            'start_date' => $request->start_date,
            'length' => $request->length,
            'description' => $request->description
        ];

        $event = Event::create($data);
        $success = "Event Created";
        return redirect( route('calendar.index') )->with(['data' => $success]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        // $event['participants'] = ;
        return view('dashboard.event-view', compact('event'));
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
        $event = $event->delete();

        $success = "Event Deleted";

        return redirect( route('calendar.index') )->with(['data' => $success]);
    }
}
