<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CreateBlotter;
use App\Resident;
use App\Announcements;
use Gate;


class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $announcement = Announcements::count('id');
        $blotter = CreateBlotter::count('id');
        $resident = Resident::count('id');
    	if (!Gate::allows('isDeskOfficer'){
            return view('errors.notallowed');
            else if(!Gate::allows('isAdmin'){
            return view('errors.notallowed');
            } 
        }
        return view('admin.dashboard',compact('blotter','resident','announcement'));
    }
}
