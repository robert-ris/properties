<?php

namespace App\Http\Controllers;

use App\Properties;
use FarhanWazir\GoogleMaps\GMaps;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Properties::orderBy('created_at', 'desc')->paginate(1);
        return view('pages.home')->with('properties', $properties);
    }
}
