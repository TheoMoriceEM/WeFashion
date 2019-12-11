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
        <div class="col-10 font-weight-bold">Nom</div>
    </div>
    <div class="row">
        <div class="col-10">Homme</div>
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
    <div class="row">
        <div class="col-10">Femme</div>
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
