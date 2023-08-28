<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Category;
use App\Models\admin\SubCategory;
use Illuminate\Support\Facades\DB;
use File;

class DashboardController extends Controller
{
    public function category(){
        $data = Category::get();
        return view('admin.categories.index')->with('page','category')->with('data',$data);
    }

    public function create_category(){
        return view('admin.categories.create')->with('page','category');
    }

    public function save_category(Request $request){
        Category::create(['name' => $request->name, 'status' => $request->status]);
        return redirect('admin/category')->with('status','Category saved successfully');
    }

    public function edit_category($id){
        $data = Category::where('id', $id)->first();
        return view('admin.categories.edit')->with('page','category')->with('data',$data);
        
    }

    public function update_category(Request $request){
        Category::where('id',$request->id)->update(['name' => $request->name, 'status' => $request->status, 'updated_at'=>date('Y-m-d H:i:s')]);
        return redirect('admin/category')->with('status','Category updated successfully');
    }

    public function delete_category($id){
        Category::where('id',$id)->delete();
        return redirect('admin/category')->with('status','Category deleted successfully');
    }

    public function sub_category(){
        $data = DB::table('sub_categories')
            ->join('categories','categories.id','=','sub_categories.category_id')
            ->select('sub_categories.*','categories.name as category_name')
            ->get();

        return view('admin.subCategories.index')->with('page','sub_category')->with('data',$data);
    }

    public function create_sub_category(){
        $categories = Category::get();
        return view('admin.subCategories.create')->with('page','sub_category')->with('data',$categories);
    }

    public function save_sub_category(Request $request){

        $folder = 'uploads/subCategory';
        $file_name = $this->saveFile($folder,$request->image);

        SubCategory::create(['name' => $request->name, 'status' => $request->status, 'category_id' => $request->category_id, 'image' => $file_name]);
        return redirect('admin/sub_category')->with('status','Sub Category saved successfully');
    }

    public function edit_sub_category($id){
        $categories = Category::get();

        $data = DB::table('sub_categories')
            ->join('categories','categories.id','=','sub_categories.category_id')
            ->select('sub_categories.*','categories.name as category_name')
            ->where('sub_categories.id',$id)
            ->first();

        return view('admin.subCategories.edit')->with('page','sub_category')->with('data',$data)->with('categories',$categories);
    }

    public function update_sub_category(Request $request){
        $update_data = ['name' => $request->name, 'status' => $request->status, 'category_id' => $request->category_id,'updated_at'=>date('Y-m-d H:i:s')];

        if($request->image){
            $folder = 'uploads/subCategory';
            $file_name = $this->saveFile($folder,$request->image);
            $update_data['image'] = $file_name;
        }

        SubCategory::where('id',$request->id)->update($update_data);
        return redirect('admin/sub_category')->with('status','Sub Category updated successfully');
    }

    public function saveFile($folder,$request_image)
    {
        $path = public_path($folder);
        if(!File::isDirectory($path)){
            File::makeDirectory($path, 0777, true, true);
        }

        $fileName = time().'_'.random_int(100000, 999999).'.'.$request_image->extension();  
        $request_image->move($path, $fileName);
        return $folder.'/'.$fileName;
    }

    public function delete_sub_category($id){
        SubCategory::where('id',$id)->delete();
        return redirect('admin/sub_category')->with('status','Sub Category deleted successfully');
    }
}
