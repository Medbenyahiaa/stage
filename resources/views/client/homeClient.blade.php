@extends('layouts.master')
@section('Content-fluid')
<div class="panel-header panel-header-sm">
</div>
@endsection

@section('title')
    Client
@endsection
@section('titlePage')
     Liste Client
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
              
              <button type="button" class="btn btn-info"data-toggle="modal" data-target="#Client_Create">Ajouter  Client</button>
              <div class="modal fade" id="Client_Create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
                <div class="modal-dialog" role="document">
                 <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un client</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                    </button>
                 </div>
                 <div class="modal-body">
                  <form action="#" method="post">
                  	@csrf
                    <div class="form-group">
                      <label >Nom / Raison social</label>
    		             <input type="text" class="form-control" name ="raison_social"placeholder="Raison social ...">
    	             </div>

                   <div class="form-group">
                      <label >ICE</label>
    		             <input type="text" class="form-control" name ="ICE"placeholder="ICE ...">
    	             </div>

                   <div class="form-group">
                      <label >Adresse</label>
    		             <input type="text" class="form-control" name ="adresse"placeholder=" Adresse ...">
    	             </div>

                   <div class="form-group">
                      <label >Ville</label>
    		             <input type="text" class="form-control" name ="ville"placeholder="ville ...">
    	             </div>
                   <div class="form-group">
                      <label >Telephone</label>
    		             <input type="text" class="form-control" name ="telephone"placeholder="06 ...">
    	             </div>
                   <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Ajouter</button>
                  </div>
                 </form>
                </div>
      
              </div>
            </div>
        </div>


              <a href="#" class="btn btn-primary">Edition Client</a>
              </table>
            </div>
          </div>
        </div>
      </div>
    
@endsection