<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
use App\User;

class ResidentSearch extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$resident = User::all();
        return view('clerk.residentsearch',compact('resident'));
    }
}

