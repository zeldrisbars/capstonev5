<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
use App\Resident;

class ResidentSearch extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$resident = Resident::all();
        return view('clerk.residentsearch',compact('resident'));
    }
}

