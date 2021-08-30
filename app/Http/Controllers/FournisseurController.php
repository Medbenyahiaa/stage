<?php

namespace App\Http\Controllers;

use App\Models\fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fournisseurs = fournisseur::all();
        return \view('fourni.homeFourni', [
            'fournisseurs' => $fournisseurs,
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
        $fournisseurs = fournisseur::create([
            'raison_social' => $request->input('raison_social'),
            'ICE' => $request->input('ICE'),
            'adresse' => $request->input('adresse'),
            'ville' => $request->input('ville'),
            'telephone' => $request->input('telephone'),
        ]);

        return redirect()->route('fournisseur');

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
     * @param \App\Models\fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fournisseurs = fournisseur::find($id);
        $fournisseurs->raison_social = $request->input('raison_social');
        $fournisseurs->ICE = $request->input('ICE');
        $fournisseurs->adresse = $request->input('adresse');
        $fournisseurs->ville = $request->input('ville');
        $fournisseurs->telephone = $request->input('telephone');
        $fournisseurs->save();

        return redirect()->route('fournisseur');
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
