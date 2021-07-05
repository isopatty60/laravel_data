<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use PDF;

class PDFController extends Controller
{
    // public function pdf()
    // {
    //     $product = product::all();
    //     $pdf = PDF::loadView('pdf', ['product' => $product]);
    //     return @$pdf->stream(); 
    // }
}
