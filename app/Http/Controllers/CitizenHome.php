<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CitizenHome extends Controller
{
   
   public function index()
   {
   	toastr()->success('Successfully Logged In!');
   	return view('Citizen.citizenhome');
   }
}
