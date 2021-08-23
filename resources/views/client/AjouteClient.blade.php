@extends('layouts.master')
@section('Content-fluid')
<div class="panel-header panel-header-sm">
</div>
@endsection

@section('title')
    Client
@endsection
@section('titlePage')
     Ajouter Client
@endsection

@section('content')
<center>
    <div class="card" style="width: 50%; border-radius: 26px; background-color: #ececec">
        <div class="card-header">
            <div style="text-align: center;"><h3 style="color: #ff3636">Ajoute Client </h3></div>
        </div>
        <div class="card-body">
    <form method="post" class="section " enctype="multipart/form-data">

    {{csrf_field()}}


    <!-- RAISON -->
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" name="email" placeholder="Nom/Raison sociale" value="">
        </div>

        
    <!-- ICE -->
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="ICE " name="ICE">

        </div>
        

    <!-- adress-->
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-address-card"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Adresse" name="adresse">
        </div>
         <!-- ville-->
         <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-home"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="ville" name="ville">
        </div>

          <!-- Numero de téléphone -->
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-mobile"></i></span>
            </div>
            <input  type="ttext"
                    class="form-control" name="telephone" placeholder="Numero de Téléphone" value="{{ old('telephone') }}">
        </div>


        <!-- Nom Complet
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" name="nom" placeholder="Nom " value="">
        </div>
    -->

      

    <!-- Numero de téléphone 
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-mobile"></i></span>
            </div>
            <input  type="ttext"
                    class="form-control" name="telephone" placeholder="Numero de Téléphone" value="{{ old('telephone') }}">
        </div>

         Gestion d'erreur pour le num 
        @if( $errors->has('telephone'))
            <p class="erreur">
                {{ $errors->first('telephone') }}
            </p>

    @endif
        -->

    <!-- Boutton de confirmation -->
        <center>
            <div class="form-group">
                <input type="submit" value="Ajouter" class="VoirPlus">
            </div>
        </center>

    </form>
        </div>
    </div>
    </center>

    <div class="table-responsive">
        <table class="table">
            <thead class="tableTitle">
            <tr style=" text-align: center ;" >
                      <th>Nom /Raison social</th>
                      <th>ICE</th>
                      <th>Adresse</th>
                      <th>Ville</th>
                      <th>Telephone</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $clients as $client)
                    <tr>
                        <th scope="col">{{ $client->raison_social }}</th>
                        <th scope="col">{{ $client->ICE }}</th>
                        <th scope="col">{{ $client->adresse }}</th>
                        <th scope="col">{{ $client->ville }}</th>
                        <th scope="col">{{ $client->telephone }}</th>
                    </tr>
            @endforeach
            </tbody>
           
        </table>
    </div>
@endsection