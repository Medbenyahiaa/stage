@extends('layouts.master')
@section('Content-fluid')
<div class="panel-header panel-header-sm">
</div>
@endsection

@section('title')
   Modification Facture
@endsection
@section('titlePage')
     Facture
@endsection

@section('content')
<div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Liste D'article</h4>
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
                            <th>article</th>
                            <th>prix</th>
                            <th>quantite</th>
                        </tr>
                        </thead>
                        
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#article_Create">Ajouter
                     article </button>
                        <div class="modal fade" id="article_Create" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Nouveau article </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/ajouterArticle/{{ $facture->id }}" method="get">
                                            @csrf
                                            
                                            <div class="form-group">
                                                <label>Article</label>
                                                <input type="text" class="form-control" name="article" placeholder="article ...">
                                            </div>
                                            <div class="form-group">
                                                <label>Prix</label>
                                                <input type="text" class="form-control" name="prix" placeholder="prix ...">
                                            </div>
                                            <div class="form-group">
                                                <label>Quantite</label>
                                                <input type="text" class="form-control" name="quantite" placeholder="quantite ...">
                                            </div>

                                            

                                        
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
                            
                                @foreach ($article as $a)
                                @if ($a->facturation_id == $facture->id)
                                <tr>
                                    <td>{{$a->description}}</td>
                                    <td>{{$a->prixU}}</td>
                                    <td>{{ $a->quantite }}</td>
                                    <td>
                                     <a href="/deleteArticle/{{ $a->id }}/{{ $facture->id }}" class="btn btn-danger"><span class="fa fa-trash"></span></a>
                                    </td>
                                    </tr>
                                @endif
                                @endforeach
                                
                            
                        </tbody>

                        

                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection