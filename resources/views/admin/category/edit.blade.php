@extends('layouts.master')

@section('CSS')
    <style>
        .error {
            color: red;
        }
    </style>
@endsection

@section('content')
    <form action="{{ route('admin.category.update', $category->id) }}" method="post" enctype="multipart/form-data">
        <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" maxlength="100" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>
    </form>
@endsection
