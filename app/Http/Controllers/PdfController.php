<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\BarangayClearanceModel;
use App\FormsModel;
use DomPDF;
use DB;
use Illuminate\Support\Facades\Auth;
class PdfController extends Controller
{
    public function index(Request $request)
    {
    $gender = DB::table('forms')->select('gendertitle')->value('gendertitle'); 
   	$name =  DB::table('forms')->select('name')->value('name');
   	$street =  DB::table('forms')->select('street')->value('street');
   	$civil =  DB::table('forms')->select('civil')->value('civil');
   	$purpose =  DB::table('forms')->select('purpose')->value('purpose');
   	$date =  DB::table('forms')->select('dateissued')->value('dateissued');
	$pdf = DomPDF::loadview('Forms.BarangayClearance',compact('gender','name','street','civil','purpose','date'));
	$pdf->SetPaper('letter','portrait');
	FormsModel::truncate();
	return $pdf->stream();
	}
	public function resi(Request $request)
	{
	$gender = DB::table('forms')->select('gendertitle')->value('gendertitle'); 
   	$name =  DB::table('forms')->select('name')->value('name');
   	$street =  DB::table('forms')->select('street')->value('street');
   	$reason1 = DB::table('forms')->select('reason1')->value('reason1');
   	$reason2 = DB::table('forms')->select('reason2')->value('reason2');
   	$date =  DB::table('forms')->select('dateissued')->value('dateissued');
	$pdf = DomPDF::loadview('Forms.Indigency',compact('gender','name','street','reason1','reason2','date'));
	$pdf->SetPaper('letter','portrait');
	FormsModel::truncate();
	return $pdf->stream();
	}
	public function resi2(Request $request)
	{
	$gender = DB::table('forms')->select('gendertitle')->value('gendertitle'); 
   	$name =  DB::table('forms')->select('name')->value('name');
   	$age =  DB::table('forms')->select('age')->value('age');
   	$street =  DB::table('forms')->select('street')->value('street');
   	$civil =  DB::table('forms')->select('civil')->value('civil');
   	$purpose =  DB::table('forms')->select('purpose')->value('purpose');
   	$date =  DB::table('forms')->select('dateissued')->value('dateissued');
	$pdf = DomPDF::loadview('Forms.Residency',compact('gender','name','age','street','civil','purpose','date'));
	$pdf->SetPaper('letter','portrait');
	return $pdf->stream();
	}

}
