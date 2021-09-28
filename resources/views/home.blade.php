@extends('layouts.app')
<link rel="apple-touch-icon" sizes="180x180" href="../img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <center> Bienvenue M.{{Auth::user()->name}}</center>
                  <center> <img src="../img/logocentre.png"  alt="IMG" width="200" height="200"></center>
                  <center><a href="/" class="btn btn-info">HOME</a></center><br>
                  <center><a href="/dash" class="btn btn-info">TON ESPACE</a></center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
