<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class FrontController extends Controller
{
    private $paginate = 6;

    public function home()
    {
        $products = Product::published()->paginate($this->paginate);

        return view('front.product-list', ['products' => $products]);
    }

    public function onDiscount()
    {
        $products = Product::published()->onDiscount()->paginate($this->paginate);

        return view('front.product-list', ['products' => $products]);
    }

    public function category($slug)
    {
        $products = Product::published()->get();

        $idArray = [];
        foreach ($products as $product) {
            if ($product->category->slug == $slug) $idArray[] = $product->id;
        }

        $categoryProducts = Product::whereIn('id', $idArray)->paginate($this->paginate);

        return view('front.product-list', ['products' => $categoryProducts]);
    }
}
