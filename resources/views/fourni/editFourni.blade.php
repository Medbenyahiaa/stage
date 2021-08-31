@extends('layouts.master')
@section('Content-fluid')
    <div class="panel-header panel-header-sm">

    </div>
@endsection

@section('title')
    Edit-Fournisseur
@endsection
@section('titlePage')
    Edit Fournisseur
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="{{ route('updateFourni', ['id' => $fournisseur->id]) }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label>Raison Social</label>
                                        <input type="text" name="raison_social" value="{{ $fournisseur->raison_social }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>ICE</label>
                                        <input type="text" name="ICE" value="{{ $fournisseur->ICE }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Adresse</label>
                                        <input type="text" name="adresse" value="{{ $fournisseur->adresse }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Ville</label>
                                        <input type="text" name="ville" value="{{ $fournisseur->ville }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Telephone</label>
                                        <input type="text" name="telephone" value="{{ $fournisseur->telephone }}" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-info">Update</button>
                                    <a href="{{ route('fournisseur') }}" class="btn btn-danger">Cancel</a>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')


@endsection
