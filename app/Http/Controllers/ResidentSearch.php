<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;

class ResidentSearch extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	if (!Gate::allows('isSAdmin')){
            return view('errors.notallowed');
        }
        return view('clerk.residentsearch');
    }
}

