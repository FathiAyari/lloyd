<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Products;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $clients=Client::orderBy('created_at')->paginate(3);
        return  view("admin.clients.clients",compact('clients'));
    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $request->validate([
            'search'=>'required',

        ]);
        $clients=Client::where("name","like",'%'.$request->search.'%')->orwhere("lastname","like",'%'.$request->search.'%')->paginate(3);
        return  view("admin.clients.clients",compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Client::create($request->all());

        return redirect()->route('clients.index');
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
    /*public function update(Request $request,Client $client )//request yjo mel formulaire
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'category_id'=>'required'
        ]);
        $client->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'category_id'=>$request->category_id
        ]);
        return redirect()->route('products.index');
    }*/

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client  $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }
}
