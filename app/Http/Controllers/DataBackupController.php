<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataBackupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('errors.notallowed');
    }
}
