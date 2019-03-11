<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcements;
use Gate;
use Illuminate\Validation\Rule;

class UpdateAnnouncement extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }
    protected function validator(array $request)
    {
        return Validator::make($request, [
            'title' => 'required|string|max:255',
            'description' => 'required|max:4098',
            'image' => 'image|mimes:jpeg,png,jpg,svg',
        ]);
    }
    public function index()
    {
        $id = Announcements::count('id');
        return view('announcements.updateannouncement',compact('id'));
    }
public function store(Request $request)
{
                $file = $request->file('image');
                $pic = "";
                $date = date("Ymdhis");
                $extension = $request->file('image')->getClientOriginalExtension();
                $pic = "images/".$date.'.'.$extension;
                $request->file('image')->move("images",$pic);
                

Announcements::create([
'id' => $request['id'],
'title' => $request['title'],
'description' => $request['description'],
'image' => $pic,
]);
	return back();
}
}
