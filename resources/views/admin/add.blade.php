@extends('layouts.master')
@section('Content-fluid')
<div class="panel-header panel-header-sm">
  
</div>
@endsection
@section('title')
Gestion d'administrateur
@endsection
@section('titlePage')
Gestion d'administrateur
@endsection

@section('content')
    <center>
    <div class="card" style="width: 50%; border-radius: 26px; background-color: #ececec">
        <div class="card-header">
            <div style="text-align: center;"><h3 style="color: #ff3636">Ajoute Un Compte</h3></div>
        </div>
        <div class="card-body">
    <form method="post" class="section " enctype="multipart/form-data" action="{{ route('register') }}">

    @csrf

   <!-- Nom Complet-->
   <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" name="name" placeholder="name " value="name"  required autocomplete="name" autofocus>
        </div>

        <!-- Gestion d'erreur pour le Nom -->
        @if( $errors->has('name'))
            <p class="erreur">
                {{ $errors->first('name') }}
            </p>

        @endif 
    <!-- Email -->
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            <input type="text" class="form-control" name="email" placeholder=" email" value="email" required autocomplete="email">
        </div>

        <!-- Gestion d'erreur pour l'adresse Mail -->
        @if( $errors->has('email'))

            <p class="erreur">
                {{ $errors->first('email') }}
            </p>

        @endif

    <!-- Mot de passe -->
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="password" name="password" required autocomplete="new-password">

        </div>
        <!-- Gestion d'erreur pour le mot de passe -->
        @if( $errors->has('password'))
            <p class="erreur">
                {{ $errors->first('password') }}
            </p>

        @endif

    <!-- Mot de passe de confirmation-->
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="password_confirmation" name="password_confirmation" required autocomplete="new-password">
        </div>

        <!-- Gestion d'erreur pour le mot de passe de confirmation-->
        @if( $errors->has('password_confirmation'))

            <p class="erreur">
                {{ $errors->first('password_confirmation') }}
            </p>

        @endif

        <br>

        

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
            <a href="/addAdmin" class="VoirPlus">Ajouter</a>
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
               
                <th scope="col">Email</th>
                <th scope="col">Nom </th>
            </tr>
            </thead>
            <tbody>
            @foreach( $users as $user)
                    <tr>
                        <th scope="col">{{ $user->email }}</th>
                        <th scope="col">{{ $user->name }}</th>
                    </tr>
            @endforeach
            </tbody>
           
        </table>
    </div>

@endsection
