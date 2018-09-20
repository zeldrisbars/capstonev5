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
        return view('announcements.announcements');
    }
}
