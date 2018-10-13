<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NonResident;

class NonResidentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$resident = NonResident::all();
        return view('clerk.nonresident',compact('resident'));
    }
}
