<?php

namespace App\Http\Controllers;

use App\Models\Historique;
use App\Models\MessageModel;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages=MessageModel::all();
        return view("admin.messages.messages",compact("messages"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        MessageModel::create($request->all());
        $historique=Historique::create([

            'subject'=>"vous avez recu un message . ",
            'type'=>"success",


        ]);
        return redirect()->route('home.index')->with("success","vous avez envoyé un message .");

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
    public function destroy(MessageModel $message)
    {
        $message->delete();

        $historique=Historique::create([

            'subject'=>"vous avez supprimé un message ",
            'type'=>"danger",


        ]);
        return redirect()->route('messages.index')->with("delete","message  a été supprimé.");

    }
}
