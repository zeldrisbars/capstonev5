<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NonResident;
use App\Resident;

class NonResidentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$nonre = NonResident::count('id');
    	$resident = NonResident::all();
        return view('clerk.nonresident',compact('resident','nonre'));
    }
    public function store(Request $request)
    {
    	  
    }
    public function destroy(Request $request)
    {
    	$non = NonResident::findorFail($request->id);
    	  $file = $request->file('image');
                $pic = "images/steve.jpg";
               
            $non->delete([
            'id' => $request['id'],
            'lastname' => $request['lastname'],
            'firstname' => $request['firstname'],
            'middlename' => $request['middlename'],
            'email' => $request['email'],
            'image' => $pic,
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
            'sitio' => $request['sitio'],
            'mlast' => $request['mlast'],
            'mfirst' => $request['mfirst'],
            'mmiddle' => $request['mmiddle'],
            'flast' => $request['flast'],
            'ffirst' => $request['ffirst'],
            'fmiddle' => $request['fmiddle'],
            'citizenship' => $request['citizenship'],
            'religion' => $request['religion'],
            'hno' => $request['hno'],
            'hrel' => $request['hrel'],
            'sib' => $request['sib'],
        
        ]); 
            
            Resident::create([
            'id' => $request['id'],
            'lastname' => $request['lastname'],
            'firstname' => $request['firstname'],
            'middlename' => $request['middlename'],
            'email' => $request['email'],
            'image' => $pic,
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
            'sitio' => $request['sitio'],
            'mlast' => $request['mlast'],
            'mfirst' => $request['mfirst'],
            'mmiddle' => $request['mmiddle'],
            'flast' => $request['flast'],
            'ffirst' => $request['ffirst'],
            'fmiddle' => $request['fmiddle'],
            'citizenship' => $request['citizenship'],
            'religion' => $request['religion'],
            'hno' => $request['hno'],
            'hrel' => $request['hrel'],
            'sib' => $request['sib'],
            ]);
    	 
    toastr()->success('Success!');       
    return back();
    }
}
