@extends('layouts.master')

@section('content')
    @if (Session::has('message') || Session::has('error'))
        @include('admin.partials.flash-message')
    @endif

    <div class="row">
        <div class="col-12 text-right">
            <a href="{{ route('admin.product.create') }}">
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
    @foreach ($products as $product)
        <div class="row">
            <div class="col-2 col-sm-3 col-md-4 col-lg-3">{{ $product->name }}</div>
            <div class="col-2 col-lg-3">{{ $product->category->name }}</div>
            <div class="col-2">{{ $product->price }}€</div>
            <div class="col-2">
                @if ($product->published)
                    <span class="badge badge-success">Publié</span>
                @else
                    <span class="badge badge-danger">Non publié</span>
                @endif
            </div>
            <a href="{{ route('admin.product.edit', $product->id) }}">
                <div class="col-1">
                    <i class="fas fa-edit"></i>
                </div>
            </a>
            <div class="col-1">
                <form action="{{ route('admin.product.destroy', $product->id) }}" method="post" class="delete-form">
                    <input name="_method" type="hidden" value="DELETE">
                    {{ csrf_field() }}
                    <button type="submit" class="bg-transparent border-0">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </form>
            </div>
        </div>
        <hr>
    @endforeach
    <div class="row">
        <div class="col-12">
            {{ $products->links() }}
        </div>
    </div>
@endsection

@section('JS')
    <script src="{{ asset("js/confirm.js") }}"></script>
@endsection
