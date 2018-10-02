<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resident;

class PendingResidentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$resident = Resident::all();
        return view('clerk.pendingresident',compact('resident'));
    }
}
