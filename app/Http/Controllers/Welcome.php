<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcements;
use App\Feedback;

class Welcome extends Controller
{
    
public function index()
	{
	$cid = Feedback::count('id');
	$announcements = Announcements::all();
    return view('welcome',compact('announcements','cid'));
	}
public function send(Request $request)
{
   	Feedback::create([
	'id' => $request['id'],
	'name' => $request['name'],
	'concerntitle' => $request['concerntitle'],
	'concerndetail' => $request['concerndetail'],
	'contactnum' => $request['contactnum'],
]);
   	toastr()->success('Success!');
   	return back();
}

}
