<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
use App\Announcements;
class AnnouncementList extends Controller
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
        $announcements = Announcements::all();
        return view('announcements.announcements',compact('announcements'));
    }
}
