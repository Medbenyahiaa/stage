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
                      <th>Nom /Raison social</th>
                      <th>ICE</th>
                      <th>Adresse</th>
                      <th>Ville</th>
                      <th>Telephone</th>
                      
              </thead>
              
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection