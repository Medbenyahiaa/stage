<?php

namespace App\Http\Controllers;
use  App\Models\client;
use App\Models\facturation;
use App\Models\article;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $article = Article::all();
        $facturations = Facturation::all();
        foreach ($facturations as $f) {
            $total = 0;
            $total1 = 0;
            foreach ($article as $a) {
                if ($a->facturation_id == $f->id) {
                    
                    $total1 += $a->prixU * $a->quantite ;
                    $total += $total1 + ($total1*0.2);
                }
            }
            $facture = Facturation::find($f->id);
            $facture->montant = $total;
            $facture->save();
        }
        $facturations = Facturation::all();
        $clients = Client::all();
        return \view('facture.homeFacture', [
            'clients' => $clients,
            'facturations' => $facturations,
            'total' => $total,
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
    
        $facturation = facturation::create([
            'client_id' => $request->input('client_id'),
            'numero_facture' => date("YmdHis"),
            'montant' => 0,
            'date_facture' => now()->toDateTimeString(),
        ]);

        return redirect()->route('facture');

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


/**
     * Update the specified resource in storage.
     *
     * 
     */
    public function updateValide($id)
    {
        $facture = Facturation::find($id);
        if ($facture->valide == 0) {
            $facture->valide = 1;
        }
        else if ($facture->valide == 1) {
            $facture->valide = 0;
        }
        $facture->save();
        return redirect()->route('facture');
    }

    public function modi($id)
    {
        $facture = Facturation::find($id);
        $article = Article::all();
        return \view('facture.modifact', [
            'facture' => $facture,
            'article' => $article,
        ]);
    }

    public function deleteFacture($id) {
        $facture = Facturation::find($id);
        $facture->delete();
        return redirect()->route('facture');
    }
}