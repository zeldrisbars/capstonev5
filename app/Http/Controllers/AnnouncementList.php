<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
class AnnouncementList extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	if (!Gate::allows('isAdmin')){
            return view('errors.notallowed');
        }
        return view('announcements.announcements');
    }
}
