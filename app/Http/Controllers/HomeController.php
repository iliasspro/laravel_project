<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Voiture;
use App\User;

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
       $a =  Auth::User()->voiture()->get();
        return view('home')->with("a", $a);
    }
}
