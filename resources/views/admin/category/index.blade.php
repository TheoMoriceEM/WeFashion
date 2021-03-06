@extends('layouts.master')

@section('content')
    @if (Session::has('message') || Session::has('error'))
        @include('admin.partials.flash-message')
    @endif

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
            <form action="{{ route('admin.category.destroy', $category->id) }}" method="post" class="delete-form">
                <input name="_method" type="hidden" value="DELETE">
                {{ csrf_field() }}
                <button type="submit" class="bg-transparent border-0">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </form>
        </div>
        <hr>
    @endforeach
    <div class="row">
        <div class="col-12">
            {{ $categories->links() }}
        </div>
    </div>
@endsection

@section('JS')
    <script src="{{ asset("js/confirm.js") }}"></script>
@endsection
