<?php

namespace App\Http\Controllers;

use App\Models\admin\Category;
use App\Models\admin\SubCategory;
use App\Models\Department;
use App\Models\Index;
use App\Models\Openings;
use App\Models\JobApplication;
use App\Models\Location;
use App\Models\Product;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('client.index')->with('categories', $categories);
    }

    public function save_enquiry(Request $request){

        $department = Department::where('id', $request->input('department'))->first();
        // dd($department);

       
        $enquiry =  Index::create(
            [
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'location' => $request->loc,
                'message' => $request->message,
                'type' => $request->type,
                'department' => $department->name??''
            ]);

                // Generate serial ID and update the record
           

            $departmentEmail = $department->email??'';

            $tokenid = str_pad($enquiry->id, 3, '0', STR_PAD_LEFT);
           
          // Send email
        $data = [
            'id' => $enquiry->id,
            'name' => $request->input('name')??'',
            'phone' => $request->input('phone')??'',
            'email' => $request->input('email')??'',
            'loc' => $request->input('loc')??'',
            'message' => $request->input('message')??'',
            'department' => $department->name??'',
            'type' => $request->type,
            'tokenid' => $tokenid
        ];

        if($request->type == 1){

            $serialId = "MULT/GENE/" . $tokenid;
            $data['serialIdSub'] = $serialId;

            Mail::to($departmentEmail)
            ->cc('analysis@multiplexgroup.com')
            ->send(new \App\Mail\Enquiry($data));

        }elseif($request->type == 2){

            $serialId = "MULT/PROD/" . $tokenid;
            $data['serialIdSub'] = $serialId;

            Mail::to('mco@multiplexgroup.com')
            ->cc('analysis@multiplexgroup.com')
            ->send(new \App\Mail\Enquiry($data));

        }elseif($request->type == 3){

            $serialId = "MULT/SERV/" . $tokenid;
            $data['serialIdSub'] = $serialId;

            Mail::to('analysis@multiplexgroup.com')
            ->cc('analysis@multiplexgroup.com')            
            ->send(new \App\Mail\Enquiry($data));

        }

        $enquiry->update(['serial_id' => $serialId]);

        // Return a response or redirect as needed
        return redirect()->back()->with('status', 'Enquiry submitted successfully');
    }

    public function current_openings()
    {
        $openings = DB::table('openings')
            ->select('openings.*','locations.location as job_location')
            ->join('locations','openings.location','=','locations.id')
            ->where('openings.deleted_at', NULL)
            ->get();
        
        return view('client.current-openings')->with('openings',$openings);
    }

    public function careers(Request $request)
    {
        $openings = DB::table('openings')
        ->select('openings.*','locations.location as job_location')
        ->join('locations','openings.location','=','locations.id')
        ->where('openings.deleted_at', NULL)->paginate(5);


        if ($request->ajax()) {

            $openings = DB::table('openings')
            ->select('openings.*','locations.location as job_location')
            ->join('locations','openings.location','=','locations.id')
            ->where('openings.deleted_at', NULL)->paginate(5);

            $view = view('client.opening-result',compact('openings'))->render();
            return response()->json(['html'=>$view]);
        }

        return view('client.current-openings',compact('openings'));
    }



    public function searchOpenings(Request $request)
    {
        //dd($request->all());

        $careers = DB::table('openings')
            ->select('openings.*', 'locations.location as job_location')
            ->join('locations', 'openings.location', '=', 'locations.id')
            ->where('openings.deleted_at', NULL);

        if(isset($request->department) && !empty($request->department))
        {
           
            $careers = $careers->where('openings.department_name', 'LIKE', '%' . $request->department . '%');
        }

        if(isset($request->location) && !empty($request->location))
        {
            $careers = $careers->where('locations.location', 'LIKE', '%' . $request->location . '%');
        }

        if(isset($request->position) && !empty($request->position))
        {
            $careers = $careers->where('openings.position', 'LIKE', '%' . $request->position . '%');
        }

        $openings = $careers->get();

        $view = view('client.opening-result',compact('openings'))->render();

        return response()->json(['html'=>$view]);

    }

    public function job_application($id) {
        $openings = Openings::find($id) ?? [];
        $location = Location::where('id',$openings->location)->first();
        
        return view('client.job-application')->with('openings',$openings)->with('location',$location);
    }

    public function save_job(Request $request){

        $folder = 'uploads/resume';
        $image_path = $this->saveFile($folder,$request->resumeFile);

        $insert_array = array(
            'opening_id' => $request->id,
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'email' => $request->email,
            'phone' => $request->phone,
            'qualification' => $request->qualification,
            'experience' => $request->experience,
            'resume' => $image_path,
        );

        JobApplication::create($insert_array);

        $job = Openings::where('id',$request->id)->first();

        $location = Location::where('id',$job->location)->first();

        $department = Department::where('id', $job->department)->first();
        
        $departmentEmail = $department->email;
      

            // Send email
        $data = [
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'qualification' => $request->input('qualification'),
            'experience' => $request->input('experience'),
            'job' => $job->position, // Assuming you have this value available
            'jobloc' => $location->location, // Assuming you have this value available
        ];

        $attachmentPath = $image_path; // Use the saved file path as attachment
        $attachmentName = basename($image_path);

        Mail::to($departmentEmail)
            ->cc('recruitment@multiplexgroup.com')
            ->send(new \App\Mail\JobApplication($data, $attachmentPath, $attachmentName));

        // Return a response or redirect as needed
        return redirect('current_openings')->with('status', 'Job Application submitted successfully');
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

    public function vision_and_misssion(){
        return view('client.vision-and-misssion');
    }

    public function founder_and_management(){
        return view('client.founder-and-management');
    }

    public function group_of_companies(){
        return view('client.group-of-companies');
    }

    public function awards_and_recognitions(){
        return view('client.awards-and-recognitions');
    }

    public function team(){
        return view('client.team');
    }

    public function timeline(){
        return view('client.timeline');
    }

    public function branches(){
        return view('client.branches');
    }

    public function global_connect(){
        return view('client.global-connect');
    }

    public function quality_testing(){
        return view('client.quality-testing');
    }

    public function r_and_d(){
        return view('client.r-and-d');
    }

    public function infrastructure(){
        return view('client.infrastructure');
    }

    public function fertilizers(){
        return view('client.fertilizers');
    }

    public function multi_pk(){
        return view('client.multi-pk');
    }

    public function soil_analysis_laboratory(){
        return view('client.soil-analysis-laboratory');
    }

    public function water_analysis_laboratory(){
        return view('client.water-analysis-laboratory');
    }

    public function leaf_analysis_laboratory(){
        return view('client.leaf-analysis-laboratory');
    }

    public function microbial_analysis_laboratory(){
        return view('client.microbial-analysis-laboratory');
    }

    public function drone_services(){
        return view('client.drone-services');
    }

    public function gardening_services(){
        return view('client.gardening-services');
    }

    public function farmer_club(){
        return view('client.farmers-club');
    }

    public function dealers_meet(){
        return view('client.dealers-meet');
    }

    public function farmers_meet(){
        return view('client.farmers-meet');
    }


    public function multiplex_vaahini(){
        return view('client.multiplex-vaahini');
    }

    public function contact(){
        return view('client.contact');
    }

    public function life_at_multiplex(){
        return view('client.life-at-multiplex');
    }

    public function gallery(){
        return view('client.gallery');
    }

    public function success_stories(){
        return view('client.success-stories');
    }
    
    public function terms_and_conditions(){
        return view('client.terms-and-conditions');
    }

    public function products(){
        $categories = Category::where('status',1)->get();

        return view('client.products')->with('categories',$categories);
    }

    public function autocompleteSearch(Request $request)
    {
          $query = $request->get('query');
          $filterResult = Location::where('location', 'LIKE', '%'. $query. '%')->get();
          return response()->json($filterResult);
    }
    
    public function autocompleteDepartment(Request $request)
    {
          $query = $request->get('query');
          $filterResult = Department::where('name', 'LIKE', '%'. $query. '%')->get();
          return response()->json($filterResult);
    } 

    public function showProducts(Request $request)
{
    $category_id = $request->get('category');
    $sub_category_id = $request->get('sub_category_id');
    
    // Retrieve category and subcategories data
    $category = Category::find($category_id);
    $subCategories = SubCategory::where('category_id', $category_id)->get();

    // Your existing product retrieval logic
    $products = Product::when($sub_category_id != 'all' && $sub_category_id != 0, function($q) use ($sub_category_id) {
        $q->where('sub_category_id', $sub_category_id);
    })->where('category_id', $category_id)->get();

    // Render the Blade view
    $view = view('client.product-result', compact('products'))->render();

    // Return the HTML as a JSON response
    return response()->json(['html' => $view]);
}

    public function showGlobal(Request $request)
    {
        $query = $request->get('query');
        $filterResult = Product::where('name', 'LIKE', '%' . $query . '%')
            ->orWhereHas('category', function ($categoryQuery) use ($query) {
                $categoryQuery->where('name', 'LIKE', '%' . $query . '%');
            })
            ->orWhereHas('sub_category', function ($subCategoryQuery) use ($query) {
                $subCategoryQuery->where('name', 'LIKE', '%' . $query . '%');
            })
            ->get();
            
        
        return response()->json($filterResult);
    }


}
