<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCategoryForm;
use App\ProductCategory;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product-category.index', [
            'productCategories' => ProductCategory::paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product-category.create',[
            'productCategories' => ProductCategory::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\ProductCategoryForm  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCategoryForm $request)
    {
        return $this->update($request, new ProductCategory());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  ProductCategory $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $productCategory)
    {
        $productCategories = ProductCategory::all();

        return view('product-category.edit')
            ->withProductCategory($productCategory)
            ->withProductCategories($productCategories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\ProductCategoryForm  $request
     * @param  ProductCategory $productCategory
     */
    public function update(ProductCategoryForm $request, ProductCategory $productCategory)
    {
        $msg = $productCategory->id ? 'alterada' : 'inserida';

        $request->persist($productCategory);

        return redirect(route('product-categories.index'))
        ->with('success', "Categoria {$msg} com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
