<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class FrontController extends Controller
{
    private $paginate = 6;

    public function home()
    {
        $products = Product::published()->with('picture')->paginate($this->paginate);

        return view('front.product-list', ['products' => $products]);
    }
}
