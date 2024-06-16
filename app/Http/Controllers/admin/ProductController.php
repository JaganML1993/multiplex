<?php

namespace App\Http\Controllers\Admin;

use App\Actions\CreateProductAct;
use App\Actions\UploadImageAct;
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
        $data = Product::orderBy('id', 'desc')->get();
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
        $data = $request->validated();

        if ($request->hasFile('catelog_link')) {
            $folder = 'uploads/products';
            $catalogPdf = $request->file('catelog_link');
            $slug = strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name));
            $fileName = $slug . '.' . $catalogPdf->extension();
            $catalogPdf->move(public_path($folder), $fileName);
            $data['catelog_link'] = "$folder/$fileName";
        }

        CreateProductAct::run($data);
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
        $subCategory = SubCategory::where('category_id', $data->category_id)->get();
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
        $data = $request->validated();
        $folder = 'uploads/products';

        if ($request->hasFile('image')) {
            if (isset($request->image)) {
                $data['image'] = UploadImageAct::run($folder, $request->image);
            }
        }

        if ($request->hasFile('front_image')) {
            if (isset($request->front_image)) {
                $data['front_image'] = UploadImageAct::run($folder, $request->front_image);
            }
        }

        if ($request->hasFile('back_image')) {

            if (isset($request->back_image) && !empty($request->back_image)) {
                $data['back_image'] = UploadImageAct::run($folder, $request->back_image);
            }
        }
        if ($request->hasFile('catelog_link')) {
            $catalogPdf = $request->file('catelog_link');
            $slug = strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name));
            $fileName = $slug . '.' . $catalogPdf->extension();
            $catalogPdf->move(public_path($folder), $fileName);

            $data['catelog_link'] = "$folder/$fileName";
        }

        if ($request->hasFile('image1')) {
            if (isset($request->image1)) {
                $data['image1'] = UploadImageAct::run($folder, $request->image1);
            }
        }
        if ($request->hasFile('image2')) {
            if (isset($request->image2)) {
                $data['image2'] = UploadImageAct::run($folder, $request->image2);
            }
        }

        $product->update($data);



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

    public function ajaxSubcategory(Request $request)
    {
        $subCategory = SubCategory::where('category_id', $request->id)->get();
        echo json_encode($subCategory);
    }
}
