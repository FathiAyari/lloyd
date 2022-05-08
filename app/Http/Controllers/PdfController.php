<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Assurance;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class PdfController extends Controller
{
    public  function generatePdf(){

        $id=\request("id");
        $data = Assurance::where('id',$id)->get();
        view()->share('data',$data);
        $date = Carbon::now()->format('Y-m-d');
        view()->share('date',$date);
        $username=DB::table('clients')
            ->join('cars', 'clients.id', '=', 'cars.client_id')->where('cars.id','=',$data[0]->car_id)

            ->select('clients.name','clients.lastname')
            ->get()->first();



        $pdf=PDF::loadView('pdf');
        return $pdf->download($username->name." ".$username->lastname.".pdf");

    }
}
