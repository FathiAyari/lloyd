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
        $clients=Client::orderBy('created_at')->paginate(10);
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
        /* %mou%
         * mouhamed
         * */
        $clients=Client::where("name","like",'%'.$request->search.'%')->orwhere("lastname","like",'%'.$request->search.'%')->paginate(10);
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
        $request->validate([// fonction de validation pour le contenu de requete http Request $request
            'name'=>'required',
            'lastname'=>'required',
            'nationality'=>'required',
            'ville'=>'required',
            'zip'=>'required',
            'document_type'=>'required',
            'type'=>'required',
            'document_number'=>'required',
        ]);
        Client::create($request->all());//creer un objet de la classe client

        return redirect()->route('clients.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {

        return view("admin.clients.client_details",compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {

        return view("admin.clients.edit_client",compact("client"));// redirection et compact d l'utilisateur courant
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Client $client )//request yjo mel formulaire
    {
        $request->validate([// fonction de validation pour le contenu de requete http Request $request
            'name'=>'required',
            'lastname'=>'required',
            'nationality'=>'required',
            'ville'=>'required',
            'zip'=>'required',
            'document_type'=>'required',
            'type'=>'required',
            'document_number'=>'required',
        ]);
  /*      {"name":"value"}*/
        $client->update([
            'name'=>$request->name,
            'lastname'=>$request->lastname,
            'nationality'=>$request->nationality,
            'ville'=>$request->ville,
            'zip'=>$request->zip,
            'type'=>$request->type,
            'document_type'=>$request->document_type,
            'document_number'=>$request->document_number,
        ]);
        return redirect()->route('clients.index');
    }

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
