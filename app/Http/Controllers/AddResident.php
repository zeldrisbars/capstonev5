<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resident;
use Illuminate\Support\Facades\Validator;
use Gate;
use Illuminate\Validation\Rule;
use DB;
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
            'image' => 'image|mimes:jpeg,png,jpg,svg',
            'age' => 'required|string|max:255',
            'birthdate' => 'required|string|max:255',
            'votersno' => 'required|string|max:255',
            'yearsres' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'barangay' => 'required|string|max:255',
            'cityprovince' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'zipcode' => 'required|string|max:255',
            'sitio' => 'required|string|max:255',
            'mlast' => 'required|string|max:255',
            'mfirst' => 'required|string|max:255',
            'mmiddle' => 'required|string|max:255',
            'flast' => 'required|string|max:255',
            'ffirst' => 'required|string|max:255',
            'fmiddle' => 'required|string|max:255',    
            'citizenship' => 'required|string|max:255',
            'religion' => 'required|string|max:255', 
            'hno' => 'required|string|max:255',
            'hrel' =>'required|string|max:255',
            'sib' => 'required|string|max:255',
            'sal'=>'required|string|max:255',

        ]);
    }

    public function index()
    {

        $resident=Resident::count('id');
        return view('clerk.addresident',compact('resident'));
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
                    // $request->file('photo')->move(public_path("/uploads"), $newfilename);
            Resident::create([
            'id' => $request['id'],
            'lastname' => $request['lastname'],
            'firstname' => $request['firstname'],
            'middlename' => $request['middlename'],
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
            'sal' => $request['sal'],

        ]); 
    return back();
    }
    
}