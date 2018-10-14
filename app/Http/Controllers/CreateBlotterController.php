<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CreateBlotter;
use Illuminate\Support\Facades\Validator;
use Gate;
class CreateBlotterController extends Controller
{
public function __construct()
    {
        $this->middleware('auth');
    }


protected function validator(array $request)
    {
        return Validator::make($request, [
            'controlno' => 'required|string|max:255',
            'accused' => 'required|string|max:255',
            'complainant' => 'required|string|max:255',
            'contactnum' => 'required|string|max:255',
            'caseofincident' => 'required|string|max:255',
            'datetime' => 'required|string|max:255',
            'detail' => 'required|max:4098',
            'status' => 'required|string|max:255',
        ]);
    }
public function index()
    {
        $id = CreateBlotter::count('id');
        $createblotter = CreateBlotter::all();
        return view('blotter.createblotter',compact('createblotter','id'));
    }    
public function store(Request $request)
{
	CreateBlotter::create([
	'id' => $request['id'],
	'controlno' => $request['controlno'],
	'accused' => $request['accused'],
	'complainant' => $request['complainant'],
    'contactnum' => $request['contactnum'],
	'caseofincident' => $request['caseofincident'],
	'datetime' => $request['datetime'],
	'detail' => $request['detail'],
	'status' => $request['status'],
]);
    toastr()->success('Success!');
    $blotter = CreateBlotter::all();
	return view('blotter.retrieve',compact('blotter'));
}
public function update(Request $request)
{
$blotter = CreateBlotter::all();

        $blotter = CreateBlotter::findorFail($request->id);
        $blotter->update([
            'id' => $request['id'],
            'controlno' => $request['controlno'],
            'accused' => $request['accused'],
            'caseofincident' => $request['caseofincident'],
            'detail' => $request['detail'],
            'status' => $request['status'],
            ]);
        return back();
}
}
