<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Ticket;
use \App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Gate;

class TicketController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
     protected function validator(array $request)
    {
        return Validator::make($request, [
            'lastname' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'middlename' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|string|max:255',
            
        ]);
    }
    public function index()
    {
        if (!Gate::allows('isSAdmin')){
            return view('errors.notallowed');
        }

        $ticket = User::all();
        return view('admin.ticket',compact('ticket'));
    }
    public function create()
    {

    }
    public function store (Request $request)
    {
        	User::create([
            'id' => $request['id'],
            'email' => $request['email'],
            'lastname' => $request['lastname'],
            'firstname' => $request['firstname'],
            'middlename' => $request['middlename'],
            'username' => $request['username'],
            'password' => Hash::make($request['password']),
            'role' => $request['role'],
            
            ]);
           return back();
    }
    public function update(Request $request)
    {
        $ticket = User::findorFail($request->edit_id);

        $ticket->update([
            'id' => $request['id'],
            'email' => $request['email'],
            'lastname' => $request['name'],
            'username' => $request['username'],
            'password' => Hash::make($request['password']),
            'role' => $request['role'],  
            ]);
        return back();
        
    }
    public function show($id)
    {

    }
    public function destroy(Request $request)
    {
        $ticket = User::findorFail($request->edit_id);

        $ticket->delete([
            'id' => $request['id'],
            'email' => $request['email'],
            'lastname' => $request['name'],
            'username' => $request['username'],
            'password' => Hash::make($request['password']),
            'role' => $request['role'],
            ]);
        return back();
    }
}
