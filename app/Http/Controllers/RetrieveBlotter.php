<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CreateBlotter;
class RetrieveBlotter extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	$blotter = CreateBlotter::all();
        return view('blotter.retrieve',compact('blotter'));
    } 

}
