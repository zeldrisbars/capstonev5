<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use Validator;

class Mailbox extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {	
    	$num = Feedback::count('id');
    	$content = Feedback::all();
    	return view('mailbox.mailboxhome',compact('content','num'));
    }
   
}
