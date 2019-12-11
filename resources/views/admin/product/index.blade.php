@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-12 text-right">
            <a href="#">
                <button type="button" class="btn btn-primary">Nouveau</button>
            </a>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-2 col-sm-3 col-md-4 col-lg-3 font-weight-bold">Nom</div>
        <div class="col-2 col-lg-3 font-weight-bold">Catégorie</div>
        <div class="col-2 font-weight-bold">Prix</div>
        <div class="col-2 font-weight-bold">État</div>
    </div>
    <div class="row">
        <div class="col-2 col-sm-3 col-md-4 col-lg-3">Lorem ipsum dolor</div>
        <div class="col-2 col-lg-3">Homme</div>
        <div class="col-2">15.29€</div>
        <div class="col-2">
            <span class="badge badge-success">Publié</span>
        </div>
        <a href="#">
            <div class="col-1">
                <i class="fas fa-edit"></i>
            </div>
        </a>
        <a href="#">
            <div class="col-1">
                <i class="fas fa-trash-alt"></i>
            </div>
        </a>
    </div>
    <hr>
@endsection
