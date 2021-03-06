<?php

namespace App\Http\Controllers;



use App\Models\Assurance;
use App\Models\Car;
use App\Models\Client;
use App\Models\Historique;
use App\Models\MessageModel;

class DashBoardController extends Controller
{
    public  function  index(){
        $clients=Client::all();
        $historiques=Historique::orderBy('created_at','desc')->paginate(5);
        $messages=MessageModel::all();
        $cars=Car::all();
        $assurance=Assurance::all();

        return view("admin.index",compact("clients","messages","cars","assurance","historiques"));
    }
}
