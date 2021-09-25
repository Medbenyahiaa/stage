@extends('layouts.master')
@section('Content-fluid')
<div class="panel-header panel-header-sm">
</div>
@endsection

@section('title')
    Facture
@endsection
@section('titlePage')
     Facture
@endsection

@section('content')
<div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Liste Client</h4>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <tr style=" text-align: center ;" >
                            <th>Numéro Facture</th>
                            <th>Date</th>
                            <th>Sociéte</th>
                            <th>Montant</th>
                            <th>Valide</th>
                        </tr>
                        </thead>

                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#Client_Create">Ajouter
                            facture</button>
                        <div class="modal fade" id="Client_Create" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Nouveau facture </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('addfact') }}" method="POST">
                                            @csrf
                                            
                                            <div class="form-group">
                                                <label>Societe</label>
                                                <select id="client_id" class="form-control" name="client_id">
                                                    @foreach ($clients as $client)
                                                    <option value="{{ $client->id }}"> {{$client->raison_social}}</option>
                                                    @endforeach
                                                </select> 
                                            </div>

                                            <!--<div class="form-group">
                                                <label>ICE</label>
                                                <input type="text" class="form-control" name="ICE" placeholder="ICE ...">
                                            </div-->

                                        
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary"
                                                    data-dismiss="modal">Annuler</button>
                                                <button type="submit" class="btn btn-success ">Ajouter</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <tbody>
                            @foreach ($facturations as $facturation)
                            <tr>
                                <td><a href="/modi/{{ $facturation->id }}" style="color:#0000ff">{{ $facturation->numero_facture}}</a></td>
                                <td>{{ $facturation->date_facture }}</td>
                                @foreach($clients as $client)
                                @if ($client->id == $facturation->client_id)
                                 <td>{{$client->raison_social}}</td>
                                @endif
                                @endforeach
                                <td>{{ $facturation->montant }}</td>
                                @if ($facturation->valide == 0)
                                <td>
                                    <a href="/updateValide/{{ $facturation->id }}" class="btn btn-danger">non valide</a>
                                </td>
                                @endif
                                @if ($facturation->valide == 1)
                                <td>
                                    <a href="/updateValide/{{ $facturation->id }}" class="btn btn-success">valide</a>
                                </td>
                                @endif
                                <td>
                                     <a href="/deleteFacture/{{ $facturation->id }}" class="btn btn-danger"><span class="fa fa-trash"></span></a>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>

                        

                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection