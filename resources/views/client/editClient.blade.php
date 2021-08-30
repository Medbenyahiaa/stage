@extends('layouts.master')
@section('Content-fluid')
    <div class="panel-header panel-header-sm">

    </div>
@endsection

@section('title')
    Edit-Users
@endsection
@section('titlePage')
    Edit Users
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="{{ route('updateClient', ['id' => $client->id]) }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label>Raison Social</label>
                                        <input type="text" name="raison_social" value="{{ $client->raison_social }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>ICE</label>
                                        <input type="text" name="ICE" value="{{ $client->ICE }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Adresse</label>
                                        <input type="text" name="adresse" value="{{ $client->adresse }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Ville</label>
                                        <input type="text" name="ville" value="{{ $client->ville }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Telephone</label>
                                        <input type="text" name="telephone" value="{{ $client->telephone }}" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-info">Update</button>
                                    <a href="{{ route('client') }}" class="btn btn-danger">Cancel</a>

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
