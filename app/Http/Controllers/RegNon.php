<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NonResident;
use Illuminate\Support\Facades\Validator;
use Gate;
use Illuminate\Validation\Rule;
use DB;

class RegNon extends Controller
{
    public function index()
    {
    	$resident=NonResident::count('id');
        return view('auth.regnon',compact('resident'));
    }
    public function store(Request $request)
    {
        $file = $request->file('image');
                $pic = "";
                if($file == '' || $file == null){
                    $pic = "images/steve.jpg";
                }
                else
                {
                    $date = date("Ymdhis");
                    $extension = $request->file('image')->getClientOriginalExtension();
                    $pic = "images/".$date.'.'.$extension;
                    $request->file('image')->move("images",$pic);
                }
    	NonResident::create([
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
        return view('auth.login'); 
    }
}
