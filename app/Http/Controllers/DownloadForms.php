<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadForms extends Controller
{
    public function index()
    {
        return view('navi.downloadforms');
    }
}
