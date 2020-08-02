<?php

namespace App\Http\Controllers;

use App\EventCategory;
use Illuminate\Http\Request;

class EventCategoryController extends Controller
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
        $eventcategories = EventCategory::orderBy('id','desc')->paginate(10);
        
        return view('dashboard.event-category', compact('eventcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.event-category-new');
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
            'name' => 'required|string'
        ];

        $this->validate($request, $rules);


        $data = [
            'name' => $request->title
        ];

        $event = EventCategory::create($data);
        $success = "Event Category Created";
        return redirect( route('events-catgeories.index') )->with(['data' => $success]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EventCategory  $eventCategory
     * @return \Illuminate\Http\Response
     */
    public function show(EventCategory $eventcategory)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EventCategory  $eventcategory
     * @return \Illuminate\Http\Response
     */
    public function edit($eventcategory)
    {
        $eventcategory = EventCategory::find($eventcategory);
        return view('dashboard.event-category-edit', compact('eventcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EventCategory  $eventcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $eventcategory)
    {
        $eventcategory = EventCategory::find($eventcategory);
        $eventcategory->name = $request->title;
        $eventcategory->save();

        $success = "Event Category Updated";
        return redirect( route('events-catgeories.index') )->with(['data' => $success]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EventCategory  $eventcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($eventcategory)
    {
        $eventcategory = EventCategory::find($eventcategory);
        $eventcategory = $eventcategory->delete();

        $success = "Event Category Deleted";

        return redirect( route('events-catgeories.index') )->with(['data' => $success]);
    }
}
