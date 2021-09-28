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
        $client = Client::create([
            'raison_social' => $request->input('raison_social'),
            'ICE' => $request->input('ICE'),
            'adresse' => $request->input('adresse'),
            'ville' => $request->input('ville'),
            'telephone' => $request->input('telephone'),
        ]);

        return redirect()->route('client');

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
    public function edit($id)
    {
        $client = Client::find($id);
        return \view('client.editClient', [
            'client' => $client,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = Client::find($id);
        $client->raison_social = $request->input('raison_social');
        $client->ICE = $request->input('ICE');
        $client->adresse = $request->input('adresse');
        $client->ville = $request->input('ville');
        $client->telephone = $request->input('telephone');
        $client->save();

        return redirect()->route('client');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_client = Client::find($id);
        $delete_client->delete();
        return redirect()->route('client');
    }
}
