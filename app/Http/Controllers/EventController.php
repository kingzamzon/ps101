<?php

namespace App\Http\Controllers;

use App\Event;
use App\Contact;
use App\Company;
use App\User;
use Illuminate\Http\Request;

class EventController extends Controller
{
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
        return $request->all();

        $data = [
            'title' => $request->title,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'category' => $request->category,
            'tags' => $request->tags,
            'user_id' => $request->user,
            'deal_id' => $request->deal,
            'task_id' => $request->task,
            'company_id' => $request->company,
            'participants' => $request->participants,
        ];

        $agent = Event::create($data);

        return $agent;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
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
}
