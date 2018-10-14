<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormsModel;
class Forms extends Controller
{
    public function clearance(Request $request)
    {
    	FormsModel::create([
	'gendertitle' => $request['gendertitle'],
	'name' => $request['name'],
	'street' => $request['street'],
	'civil' => $request['civil'],
	'purpose' => $request['purpose'],
	'dateissued' => $request['dateissued'],

]);
    return redirect('/barangayclearance/print');
    }
    
    public function indigency(Request $request)
    {
	 FormsModel::create([
	'gendertitle' => $request['gendertitle'],
	'name' => $request['name'],
	'street' => $request['street'],
	'reason1' => $request['reason1'],
	'reason2' => $request['reason2'],
	'dateissued' => $request['dateissued2'],
	]);
    return redirect('/indigency/print');
    }

    public function residency(Request $request)
    {
	 FormsModel::create([
	'gendertitle' => $request['gendertitle'],
	'name' => $request['name'],
	'street' => $request['street'],
	'civil' => $request['civil'],
	'age' => $request['age'],
	'purpose' => $request['purpose'],
	'dateissued' => $request['dateissued3'],
	]);
    return redirect('/residency/print');
    }

}
