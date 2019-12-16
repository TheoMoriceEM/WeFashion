@extends('layouts.master')

@section('CSS')
    <style>
        .error {
            color: red;
        }
    </style>
@endsection

@section('content')
    <form action="{{ route('admin.category.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" maxlength="100" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>
    </form>
    <a href="{{ route('admin.category.index') }}">
        <button class="btn btn-secondary mt-2">
            <i class="fas fa-arrow-circle-left"></i> Retour
        </button>
    </a>
@endsection
