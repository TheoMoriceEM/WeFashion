@extends('layouts.master')

@section('CSS')
    <style>
        .product-name {
            color: black;
            font-size: 1.2rem;
        }

        .product-price {
            color: #636363;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <p class="text-right">4 résultats</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-4">
            <a href="#">
                <div class="product-img">
                    <img src="https://picsum.photos/400" alt="lorem ipsum" class="w-100">
                </div>
                <p class="product-name">Lorem ipsum</p>
                <p class="product-price">59.65€</p>
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
            <a href="#">
                <div class="product-img">
                    <img src="https://picsum.photos/400" alt="lorem ipsum" class="w-100">
                </div>
                <p class="product-name">Lorem ipsum</p>
                <p class="product-price">59.65€</p>
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
            <a href="#">
                <div class="product-img">
                    <img src="https://picsum.photos/400" alt="lorem ipsum" class="w-100">
                </div>
                <p class="product-name">Lorem ipsum</p>
                <p class="product-price">59.65€</p>
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
            <a href="#">
                <div class="product-img">
                    <img src="https://picsum.photos/400" alt="lorem ipsum" class="w-100">
                </div>
                <p class="product-name">Lorem ipsum</p>
                <p class="product-price">59.65€</p>
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
            <a href="#">
                <div class="product-img">
                    <img src="https://picsum.photos/400" alt="lorem ipsum" class="w-100">
                </div>
                <p class="product-name">Lorem ipsum</p>
                <p class="product-price">59.65€</p>
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
            <a href="#">
                <div class="product-img">
                    <img src="https://picsum.photos/400" alt="lorem ipsum" class="w-100">
                </div>
                <p class="product-name">Lorem ipsum</p>
                <p class="product-price">59.65€</p>
            </a>
        </div>
    </div>
@endsection
