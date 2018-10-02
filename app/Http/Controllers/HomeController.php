<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\CreateBlotter;
use App\Resident;
use App\Announcements;
use Gate;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcement = Announcements::count('id');
        $blotter = CreateBlotter::count('id');
        $resident = Resident::count('id');
        $allres = Resident::all();
        return view('admin.dashboard',compact('blotter','resident','announcement','allres'));
    }
}
