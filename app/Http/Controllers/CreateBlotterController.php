<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CreateBlotter;
use Illuminate\Support\Facades\Validator;
class CreateBlotterController extends Controller
{
public function __construct()
    {
        $this->middleware('auth');
    }

public $no = 1;
protected function validator(array $request)
    {
        return Validator::make($request, [
            'controlno' => 'required|string|max:255',
            'accused' => 'required|string|max:255',
            'complainant' => 'required|string|max:255',
            'caseofincident' => 'required|string|max:255',
            'datetime' => 'required|string|max:255',
            'detail' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);
    }
public function index()
    {
        $finalblotter = $blotter + $no;
        $blotter = CreateBlotter::where('id',1)->get();
        $createblotter = CreateBlotter::all();
        return view('blotter.createblotter',compact('createblotter','blotter','finalblotter'));
    }    
public function store(Request $request)
{
	CreateBlotter::create([
	'id' => $request['id'],
	'controlno' => $request['controlno'],
	'accused' => $request['accused'],
	'complainant' => $request['complainant'],
	'caseofincident' => $request['caseofincident'],
	'datetime' => $request['datetime'],
	'detail' => $request['detail'],
	'status' => $request['status'],
]);
	return back();
}
}
