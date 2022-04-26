<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Assurance;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;

class PdfController extends Controller
{
    public  function generatePdf(){

        $id=\request("id");
        $data = Assurance::where('id',$id)->get();
        view()->share('data',$data);
        $date=$mytime = Carbon::now()->format('Y-m-d');
        view()->share('date',$date);




        $pdf=PDF::loadView('pdf');
        return $pdf->download("test.pdf");

    }
}
