<?php

namespace App\Http\Controllers;

use App\Agent;
use App\Note;
use App\Contact;
use App\Paycheck;
use Illuminate\Http\Request;


class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $agents = Agent::orderBy('id','desc')->paginate(1);
        $notes = Note::orderBy('id','desc')->paginate(5);
        $contacts = Contact::orderBy('id','desc')->paginate(5);
        $paychecks = Paycheck::orderBy('id','desc')->paginate(5);

        
        return view('dashboard.home', compact('agents', 'notes', 'contacts', 'paychecks'));
    }
}
