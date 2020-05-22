<?php

namespace App\Http\Controllers;

use App\Agent;
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
        
        return view('dashboard.home', compact('agents'));
    }
}
