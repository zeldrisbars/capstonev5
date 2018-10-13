<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;

class CitizenHome extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }
    protected function validator(array $request)
    {
        return Validator::make($request, [
            'name' => 'required|string|max:255',
            'concerntitle' => 'required|string|max:255',
            'concerndetail' => 'required|string|max:255',
            'contactnum' => 'required|string|max:255',
            

        ]);
    }
   public function index()
   {
   	toastr()->success('Successfully Logged In!');
   	$cid = Feedback::count('id');
   	return view('citizen.citizenhome',compact('cid'));
   }
   public function sendFeedback(Request $request)
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
