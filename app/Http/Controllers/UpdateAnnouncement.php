<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcements;
use Gate;

class UpdateAnnouncement extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }
    protected function validator(array $request)
    {
        return Validator::make($request, [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);
    }
    public function index()
    {
        $id = Announcements::count('id');
        return view('announcements.updateannouncement',compact('id'));
    }
public function store(Request $request)
{
Announcements::create([
'id' => $request['id'],
'title' => $request['title'],
'description' => $request['description']
]);
	return back();
}
}
