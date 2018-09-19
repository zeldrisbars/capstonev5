<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resident;
use Illuminate\Support\Facades\Validator;
class AddResident extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function validator(array $request)
    {
        return Validator::make($request, [
            'lastname' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'middlename' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'civil' => 'required|string|max:255',
            'age' => 'required|string|max:255',
            'birthdate' => 'required|string|max:255',
            'votersno' => 'required|string|max:255',
            'yearsres' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'barangay' => 'required|string|max:255',
            'cityprovince' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'zipcode' => 'required|string|max:255',
            'mlast' => 'required|string|max:255',
            'mfirst' => 'required|string|max:255',
            'mmiddle' => 'required|string|max:255',
            'flast' => 'required|string|max:255',
            'ffirst' => 'required|string|max:255',
            'fmiddle' => 'required|string|max:255',     
        ]);
    }

    public function index()
    {
        if (!Gate::allows('isAdmin')){
            return view('errors.notallowed');
        }
        $resident=Resident::count('id');
        return view('clerk.addresident',compact('resident'));
    }
    public function store(Request $request)
    {
    	Resident::create([
    		'id' => $request['id'],
    		'lastname' => $request['lastname'],
    		'firstname' => $request['firstname'],
    		'middlename' => $request['middlename'],
    		'gender' => $request['gender'],
    		'civil' => $request['civil'],
    		'age' => $request['age'],
    		'birthdate' => $request['birthdate'],
    		'votersno' => $request['votersno'],
    		'yearsres' => $request['yearsres'],
    		'street' => $request['street'],
    		'barangay' => $request['barangay'],
    		'cityprovince' => $request['cityprovince'],
    		'province' => $request['province'],
    		'zipcode' => $request['zipcode'],
    		'mlast' => $request['mlast'],
    		'mfirst' => $request['mfirst'],
    		'mmiddle' => $request['mmiddle'],
    		'flast' => $request['flast'],
    		'ffirst' => $request['ffirst'],
    		'fmiddle' => $request['fmiddle'],
		]);
		return back(); 
    }
}
