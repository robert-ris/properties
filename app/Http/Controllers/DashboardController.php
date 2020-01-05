<?php

namespace App\Http\Controllers;

use App\Properties;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $properties = Properties::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.dashboard')->with('properties', $properties);
    }
}
