<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    private $paginate = 15;

    public function __construct()
    {
        view()->composer('layouts.master', function ($view) {
            $view->with('part', 'back');
        });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate($this->paginate);

        return view('admin.product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sizes = config('sizes');
        $categories = Category::all();

        return view('admin.product.form', ['sizes' => $sizes, 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required|string',
            'description'   => 'nullable|string',
            'price'         => 'required|numeric',
            'reference'     => 'required|string',
            'sizes'         => 'required|array',
            'sizes.*'       => 'string',
            'category_id'   => 'required|integer',
            'published'     => 'required|integer',
            'discount'      => 'required|integer',
            'picture'       => 'file|mimes:jpeg,bmp,png',
            'picture_title' => 'nullable|string'
        ]);

        $inputs = $request->all();
        $inputs['sizes'] = implode(',', $inputs['sizes']);
        $inputs['slug'] = Str::slug($inputs['name'], '-');
        $product = Product::create($inputs);

        $picture = $request->file('picture');
        if (!empty($picture)) {
            $link = $picture->store('');
            $product->picture()->create([
                'link' => $link,
                'title' => $request->picture_title ?? $request->name
            ]);
        }

        return redirect()->route('admin.product.index')->with('message', 'Le produit a bien été créé.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
