<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CreateBlotter;
use Gate;


class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $blotter = CreateBlotter::where('id',1)->get();
    	if (!Gate::allows('isAdmin')){
    		abort(500,"Oops, Wizards can't do that thing!");
    	}
        return view('admin.dashboard',compact('blotter'));
    }
}
