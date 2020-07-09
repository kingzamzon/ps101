<?php

namespace App\Http\Controllers;

use App\Agent;
use App\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
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
        $rules = [
            'access' => 'required|string|max:7',
            'description' => 'required'
        ];

        $this->validate($request, $rules);

        $data = $request->all();
        $data['user_id'] = auth()->user()->id;

        $contact = Note::create($data);
        
        $success = "Blog Created";
        return redirect()->back()->with(['data' => $success]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        $agents = Agent::orderBy('id','desc')->get();
        return view('dashboard.blog-edit', compact('note', 'agents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
    {
        $note->access = $request->access;
        $note->description = $request->description;
        $note->user_id = auth()->user()->id;
        $note->agent_id = $request->agent_id;
        $note->save();

        $success = "Blog Updated";

        return redirect( route('home') )->with(['data' => $success]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        $note = $note->delete();

        $success = "Blog Deleted";

        return redirect()->back()->with(['data' => $success]);
    }
}
