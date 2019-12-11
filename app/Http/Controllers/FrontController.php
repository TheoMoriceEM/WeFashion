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
        view()->composer('layouts.master', function ($view) {
            $view->with('part', 'front');
        });

        view()->composer('partials.navbar-front', function ($view) {
            $categories = Category::pluck('name', 'slug')->all();
            $view->with('categories', $categories);
        });
    }

    public function index()
    {
        $products = Product::published()->paginate($this->paginate);

        return view('front.index', ['products' => $products]);
    }

    public function indexDiscount()
    {
        $products = Product::published()->onDiscount()->paginate($this->paginate);

        return view('front.index', ['products' => $products, 'active' => 'discount']);
    }

    public function indexCategory($slug)
    {
        $products = Product::published()->get();

        $idArray = [];
        foreach ($products as $product) {
            if ($product->category->slug == $slug) $idArray[] = $product->id;
        }

        $categoryProducts = Product::whereIn('id', $idArray)->paginate($this->paginate);

        return view('front.index', ['products' => $categoryProducts, 'active' => $slug]);
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $sizes = explode(',', $product->sizes);

        return view('front.show', ['product' => $product, 'sizes' => $sizes]);
    }
}
