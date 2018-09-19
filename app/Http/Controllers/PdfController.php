<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\BarangayClearanceModel;
use DomPDF;

class PdfController extends Controller
{
    public function index(Request $request)
    {
	$pdf = DomPDF::loadview('Forms.BarangayClearance');
	$pdf->SetPaper('letter','portrait');
	return $pdf->stream();
	}
}
