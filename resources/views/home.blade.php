@extends('layouts.app')

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

                   <center> Bienvenue {{Auth::user()->name}}</center>
                  <center> <img src="../img/logocentre.png"  alt="IMG" width="200" height="200"></center>
                  <center><a href="/" class="btn btn-info">HOME</a></center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
