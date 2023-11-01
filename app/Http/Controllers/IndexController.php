<?php

namespace App\Http\Controllers;

use App\Models\admin\Category;
use App\Models\Index;
use App\Models\Openings;
use App\Models\JobApplication;
use App\Models\Location;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\DB;

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
        Index::create(['name' => $request->name,'phone' => $request->phone,'email' => $request->email,'location' => $request->loc,'message' => $request->message]);
        return redirect()->back()->with('status','Enquiry submitted successfully');
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
        return redirect('current_openings')->with('status','Job Application submitted successfully');
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

    public function domestic(){
        return view('client.domestic');
    }

    public function global_connect(){
        return view('client.global-connect');
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


}
