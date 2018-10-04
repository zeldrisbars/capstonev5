<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
use App\Announcements;
class AnnouncementList extends Controller
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
        ]);
    }
    public function index()
    {
        $announcementnum = Announcements::count('id');
        $announcements = Announcements::all();
        return view('announcements.announcements',compact('announcements','announcementnum'));
    }
    public function destroy(Request $request)
    {
        $announcements = Announcements::findorFail($request->id);

        $announcements->delete([
            'id' => $request['id'],
            'title' => $request['title'],
            'description' => $request['description'],
            ]);
        return back();
    }
}
