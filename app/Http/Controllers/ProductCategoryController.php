<?php

namespace App\Http\Controllers;

use App\Models\admin\Category;
use App\Models\admin\SubCategory;
use App\Models\Product;

class ProductCategoryController extends Controller
{
    public function categoryProducts($id)
    {
        $category = Category::where('name', $id)->first();

        $products = Product::where('category_id', $category->id)
            ->orderBy('id', 'desc')
            ->get();

        $subCategories = SubCategory::where('category_id', $category->id)->get();

        return view('client.category-products')->with('products', $products)->with('subCategories', $subCategories ?? [])->with('category', $category)->with('category_id', $category->id);
    }

    public function categoryProductDetail($productId)
    {
        $product = Product::where('slug', $productId)->first();
        
        $category = Category::where('id', $product->category_id)->first();

        return view('client.category-product-detail', compact('product', 'category'));
    }
}
