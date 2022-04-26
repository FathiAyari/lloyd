<?php

namespace App\Http\Controllers;

use App\Models\Assurance;
use App\Models\Car;
use App\Models\Historique;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isNull;
use Carbon\Carbon;

class AssuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assurances=Assurance::all();
        return  view("admin.garantie.index",compact('assurances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = \request('id');
        return view("admin.garantie.create_garantie",compact("id"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
$optional=$request->optional;
        if(is_null($optional)){
            $optional=[];
        }
        $persons=$request->persons;
        if(is_null($persons)){
            $persons=[];
        }
        $debut =Carbon::now();
        $fin =$debut->addMonths(1);
        Assurance::create([
            'legale'=>["Réesponsabilité  Civile-Recours Tiers Incendie"],
            'optional'=>$optional,
            'persons'=>$persons,
            'car_id'=>$request->car_id,
            'fractionnement'=>$request->fractionnement,
            'debut'=>Carbon::now(),
            'fin'=>Carbon::now()->addMonths($request->fractionnement),
        ]);


$car=Car::where('id',$request->car_id)->first()->update(['granted'=>true]);

        Historique::create([

            'subject'=>"vous avez ajouté un garantie ",
            'type'=>"success",


        ]);
        return redirect()->route('garantie.index')->with("success","garantie  ajouté avec succès");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
