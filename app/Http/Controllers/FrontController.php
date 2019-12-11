<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Category;

class FrontController extends Controller
{
    private $paginate = 6;

    public function __construct()
    {
        view()->composer('partials.navbar', function ($view) {
            $categories = Category::pluck('name', 'slug')->all();
            $view->with('categories', $categories);
        });
    }

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

    public function product($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $sizes = explode(',', $product->sizes);

        return view('front.product-detail', ['product' => $product, 'sizes' => $sizes]);
    }
}
