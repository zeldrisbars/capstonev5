<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CreateBlotter;
use Gate;
class RetrieveBlotter extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	if (!Gate::allows('isDeskOfficer')){
            return view('errors.notallowed');
        }
        if (!Gate::allows('isAdmin')){
            return view('errors.notallowed');
        }
    	$blotter = CreateBlotter::all();
        return view('blotter.retrieve',compact('blotter'));
    } 

}
