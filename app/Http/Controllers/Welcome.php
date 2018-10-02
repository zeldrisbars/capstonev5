<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcements;

class Welcome extends Controller
{
    
public function index()
	{
	$announcements = Announcements::all();
    return view('welcome',compact('announcements'));
	}
}
