@extends('layouts.master')

@section('CSS')
    <style>
        #productName {
            font-size: 1.5rem;
        }

        #productPrice {
            color: #636363;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-md-6">
            <img src="https://picsum.photos/800" alt="lorem ipsum" class="w-100">
        </div>
        <div class="col-12 col-md-6 my-4 my-md-0">
            <a href="#" class="badge badge-primary">Catégorie</a>
            <p id="productName">Nom du produit</p>
            <p id="productPrice">59.86€</p>
            <span class="badge badge-info text-uppercase">En solde !!!</span>
            <select class="custom-select my-4">
                <option selected disabled>Taille</option>
                <option value="XS">XS</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>
            <button type="button" class="btn btn-secondary btn-lg">Acheter</button>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero provident nulla omnis ex possimus quisquam itaque cum nostrum quaerat, eos molestias ea laborum. Impedit repellat tenetur qui sapiente, praesentium natus!</p>
            <p class="mt-2"><span class="font-weight-bold">Référence produit : </span>123456789azertyu</p>
        </div>
    </div>
@endsection

{{-- description
reference --}}
