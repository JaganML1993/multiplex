<?php

namespace App\Http\Controllers\Admin;

use App\Actions\CreateProductAct;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductReq;
use App\Http\Requests\UpdateProductReq;
use App\Models\admin\Category;
use App\Models\admin\SubCategory;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::all();
        return view('admin.products.index')->with('page', 'products')->with('data', $data ?? []);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::get();
        return view('admin.products.create')->with('page', 'products')->with('category', $category ?? []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductReq $request)
    {
        CreateProductAct::run($request->validated());
        return redirect('admin/products')->with('status', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($product_id)
    {
        $data = Product::find($product_id);
        $category = Category::get();
        $subCategory = SubCategory::get();
        return view('admin.products.edit')->with('page', 'products')->with('data', $data ?? [])->with('category', $category ?? [])->with('subCategory', $subCategory ?? []);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductReq $request)
    {
        $product = Product::find($request->id);
        $product->update($request->validated());

        return redirect('admin/products')->with('status', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id)
    {
        $product = Product::find($product_id);
        $product->delete();
        
        return redirect('admin/products')->with('status', 'Product deleted successfully');
    }

    public function ajaxSubcategory(Request $request){
        $subCategory = SubCategory::where('category_id', $request->id)->get();
        echo json_encode($subCategory);
    }
}
