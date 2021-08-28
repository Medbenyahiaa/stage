<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\client;
use SebastianBergmann\Environment\Console;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$client ['clients']=Client::OrderBy('id')->paginate(3);
        //return view ('client.AjouteClient',$client);

        $clients = Client::all();
        return \view('client.homeClient', [
            'clients' => $clients,
        ]);

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
        $client = array(
            'raison_social'=>$request->raison_social,
            'ICE'=>$request->ICE,
            'adresse'=>$request->adresse,
            'ville'=>$request->ville,
            'telephone'=>$request->telephone
        );


        Client::create($client);
        return redirect()->route('client.AjouteClient');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $client = array(
            'raison_social'=>$request->raison_social,
            'ICE'=>$request->ICE,
            'adresse'=>$request->adresse,
            'ville'=>$request->ville,
            'telephone'=>$request->telephone
        );
        Client::FindOrfail($request->client_id)->update($client);
        return redirect()->route('client.AjouteClient');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $client)
    {
        $delete = $client->all();
        $delete_client=Client::FindOrfail($client->client_id);
        $delete_client->delete();
        return redirect()->route('client.AjouteClient');
    }
}
