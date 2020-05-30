<?php

namespace App\Http\Controllers;

use App\Event;
use App\Contact;
use App\Company;
use App\User;
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
        $contacts = Contact::orderBy('full_name','asc')->get();
        $companys = Company::orderBy('name','asc')->get();
        $deals = Company::orderBy('id','desc')->get();
        $tasks = Company::orderBy('id','desc')->get();
        $users = User::orderBy('name','asc')->get();

        return view('dashboard.event-new', compact('contacts', 'companys', 'deals', 'tasks', 'users'));
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
            'category' => 'required',
            'tags' => 'required',
        ];

        $this->validate($request, $rules);

        $start_date = new Carbon($request->start_date);
        $start_date = $start_date->toDateTimeString();
        $end_date = new Carbon($request->end_date);
        $end_date = $end_date->toDateTimeString();

        if($request->has('participants')){
            $participants = json_encode($request->participants);
        }else {
            $participants = '[]';
        }

        $data = [
            'title' => $request->title,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'category' => $request->category,
            'tags' => $request->tags,
            'user_id' => $request->user,
            'deal_id' => $request->deal,
            'task_id' => $request->task,
            'company_id' => $request->company,
            'participants' => $participants
        ];

        $event = Event::create($data);
        $success = "Event Created";
        // return redirect()->back()->with(['data' => $success]);
        return redirect( route('events.show', ['event' => $event->id]) )->with(['data' => $success]);
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
