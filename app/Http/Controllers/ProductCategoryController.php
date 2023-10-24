<?php

namespace App\Http\Controllers;

use App\Models\admin\Category;
use App\Models\admin\SubCategory;
use App\Models\Product;

class ProductCategoryController extends Controller
{
    public function categoryProducts($id, $sub_id)
    {
        $products = Product::when($sub_id != 0, function($q) use ($sub_id) {
            $q->where('sub_category_id', $sub_id);
        })->where('category_id', $id)
        ->get();

        $category = Category::where('id', $id)->first();
        $subCategories = SubCategory::where('category_id', $id)->get();

        return view('client.category-products')->with('products', $products)->with('subCategories', $subCategories ?? [])->with('category', $category)->with('category_id', $id)->with('sub_category_id', $sub_id);
    }

    public function categoryProductDetail($productId){
        $product = Product::find($productId);

        return view('client.category-product-detail')->with('product', $product);
    }
}
