@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-12 text-right">
            <a href="{{ route('admin.category.create') }}">
                <button type="button" class="btn btn-primary">Nouveau</button>
            </a>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-10 font-weight-bold">Nom</div>
    </div>
    @foreach ($categories as $category)
        <div class="row">
            <div class="col-10">{{ $category->name }}</div>
            <a href="{{ route('admin.category.edit', $category->id) }}">
                <div class="col-1">
                    <i class="fas fa-edit"></i>
                </div>
            </a>
            <a href="{{ route('admin.category.destroy', $category->id) }}">
                <div class="col-1">
                    <i class="fas fa-trash-alt"></i>
                </div>
            </a>
        </div>
        <hr>
    @endforeach
@endsection
