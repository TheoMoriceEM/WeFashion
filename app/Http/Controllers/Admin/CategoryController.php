<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Category;
use App\Http\Requests\CategoryRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class CategoryController extends Controller
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
        $categories = Category::paginate($this->paginate);

        return view('admin.category.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $inputs = $request->validated();
        $inputs['slug'] = Str::slug($inputs['name'], '-');
        Category::create($inputs);

        return redirect()->route('admin.category.index')->with('message', 'La catégorie a bien été créée.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $category = Category::find($category->id);

        return view('admin.category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $inputs = $request->validated();
        $inputs['slug'] = Str::slug($inputs['name'], '-');
        $category->update($inputs);

        return redirect()->route('admin.category.index')->with('message', 'La catégorie a bien été modifiée.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if ($category->products()->first()) {
            return redirect()->route('admin.category.index')->with('error', "La catégorie n'a pas pu être supprimée parce qu'un ou plusieurs produits y sont encore rattachés.");
        } else {
            Category::destroy($category->id);
            return redirect()->route('admin.category.index')->with('message', 'La catégorie a bien été supprimée.');
        }
    }
}
