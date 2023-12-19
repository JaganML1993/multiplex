<?php

namespace App\Http\Controllers\Admin;

use App\Actions\UploadImageAct;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Category;
use App\Models\admin\SubCategory;
use App\Models\Index;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function category()
    {
        $data = Category::get();
        return view('admin.categories.index')->with('page', 'category')->with('data', $data);
    }

    public function create_category()
    {
        return view('admin.categories.create')->with('page', 'category');
    }

    public function save_category(Request $request)
    {
        $folder = 'uploads/category';
        $file_name = UploadImageAct::run($folder, $request->image);
        $folder = 'uploads/products';
        if (isset($request->catelog_link) && $request->hasFile('catelog_link')) {
            $catalogPdf = $request->file('catelog_link');
            $fileName = time() . '.' . $catalogPdf->extension();
            $catalogPdf->move(public_path($folder), $fileName);

            $catelog_link = "$folder/$fileName";
        }else{
            $catelog_link = null;
        }
        Category::create(['name' => $request->name, 'status' => $request->status, 'image' => $file_name, 'description' => $request->description,'catelog_link' => $catelog_link]);
        return redirect('admin/category')->with('status', 'Category saved successfully');
    }

    public function edit_category($id)
    {
        $data = Category::where('id', $id)->first();
        return view('admin.categories.edit')->with('page', 'category')->with('data', $data);
    }

    public function update_category(Request $request)
    {
        $data = ['name' => $request->name, 'status' => $request->status, 'updated_at' => date('Y-m-d H:i:s'), 'description' => $request->description];

        if(isset($request->image)){
            $folder = 'uploads/category';
            $file_name = UploadImageAct::run($folder, $request->image);
            $data['image'] = $file_name;
        }

        $c = Category::where('id', $request->id)->first();

        if ($request->hasFile('catelog_link')) {
            $folder = 'uploads/category';
            $catalogPdf = $request->file('catelog_link');
            $fileName = time() . '.' . $catalogPdf->extension();
            $catalogPdf->move(public_path($folder), $fileName);

            $data['catelog_link'] = "$folder/$fileName";
        }else{
            $data['catelog_link'] = $c->catelog_link;

        }
        

        $update = Category::where('id', $request->id)->update($data);

        return redirect('admin/category')->with('status', 'Category updated successfully');
    }

    public function delete_category($id)
    {
          // Step 1: Retrieve the related products
        $category = Category::find($id);
        $relatedProducts = $category->products;
        $category->products()->delete();
        // Step 2: Delete the category and its related products
        $category->delete();
      
        return redirect('admin/category')->with('status', 'Category deleted successfully');
    }

    public function sub_category()
    {
        $data = DB::table('sub_categories')
            ->join('categories', 'categories.id', '=', 'sub_categories.category_id')
            ->select('sub_categories.*', 'categories.name as category_name')
            ->get();

        return view('admin.subCategories.index')->with('page', 'sub_category')->with('data', $data);
    }

    public function create_sub_category()
    {
        $categories = Category::get();
        return view('admin.subCategories.create')->with('page', 'sub_category')->with('data', $categories);
    }

    public function save_sub_category(Request $request)
    {

        $folder = 'uploads/subCategory';
        // $file_name = UploadImageAct::run($folder, $request->image);
        // $file_name = null;

        SubCategory::create(['name' => $request->name, 'status' => $request->status, 'category_id' => $request->category_id,]);
        return redirect('admin/sub_category')->with('status', 'Sub Category saved successfully');
    }

    public function edit_sub_category($id)
    {
        $categories = Category::get();

        $data = DB::table('sub_categories')
            ->join('categories', 'categories.id', '=', 'sub_categories.category_id')
            ->select('sub_categories.*', 'categories.name as category_name')
            ->where('sub_categories.id', $id)
            ->first();

        return view('admin.subCategories.edit')->with('page', 'sub_category')->with('data', $data)->with('categories', $categories);
    }

    public function update_sub_category(Request $request)
    {
        $update_data = ['name' => $request->name, 'status' => $request->status, 'category_id' => $request->category_id, 'updated_at' => date('Y-m-d H:i:s')];

        if ($request->image) {
            $folder = 'uploads/subCategory';
            $file_name = UploadImageAct::run($folder, $request->image);
            $update_data['image'] = $file_name;
        }

        SubCategory::where('id', $request->id)->update($update_data);
        return redirect('admin/sub_category')->with('status', 'Sub Category updated successfully');
    }

    public function delete_sub_category($id)
    {
        SubCategory::where('id', $id)->delete();
        return redirect('admin/sub_category')->with('status', 'Sub Category deleted successfully');
    }

    public function enquiryList(){
        $enquiries = Index::where('type',1)->get();
        
        return view('admin.enquiry.index')->with('page', 'enquiry')->with('enquiries', $enquiries);
    }

    public function productenquiryList(){
        $enquiries = Index::where('type',2)->get();
        
        return view('admin.enquiry.productindex')->with('page', 'productenquiry')->with('enquiries', $enquiries);
    }

    public function serviceenquiryList(){
        $enquiries = Index::where('type',3)->get();
        
        return view('admin.enquiry.serviceindex')->with('page', 'serviceenquiry')->with('enquiries', $enquiries);
    }

    public function updateRemark($id, Request $request)
    {
        // Validate the request as needed

        $enquiry = Index::find($id);
        return view('admin.enquiry.remark')->with('page', 'enquiry')->with('enquiry', $enquiry);

    }
    public function updateRemarkStore($id, Request $request)
    {
        // Validate the request as needed

        $enquiry = Index::find($id);
        $enquiry->remarks = $request->input('remarks');
        $enquiry->status = $request->input('status'); // Update the status to "1"
        $enquiry->save();

        if($enquiry->type == 1){

        $enquiries = Index::where('type',1)->get();
        
        return view('admin.enquiry.index')->with('page', 'enquiry')->with('enquiries', $enquiries);

        }elseif($enquiry->type == 2){

            $enquiries = Index::where('type',2)->get();
        
            return view('admin.enquiry.productindex')->with('page', 'productenquiry')->with('enquiries', $enquiries);
            
        }elseif($enquiry->type == 3){

            $enquiries = Index::where('type',3)->get();
        
        return view('admin.enquiry.serviceindex')->with('page', 'serviceenquiry')->with('enquiries', $enquiries);
            
        }



    }

}
