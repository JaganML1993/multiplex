<?php

namespace App\Http\Controllers;

use App\Models\Index;
use App\Models\Openings;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.index');
    }

    public function save_enquiry(Request $request){
        Index::create(['name' => $request->name,'phone' => $request->phone,'email' => $request->email,'location' => $request->loc,'message' => $request->message]);
        return redirect()->back()->with('status','Enquiry submitted successfully');
    }

    public function current_openings()
    {
        $openings = Openings::get();
        return view('client.current-openings')->with('openings',$openings);
    }

    public function job_application($id) {
        $openings = Openings::where('id',$id)->first();
        return view('client.job-application')->with('openings',$openings);
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

    public function awards_and_accreditations(){
        return view('client.awards-and-accreditations');
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

    public function bull_work_services(){
        return view('client.bull-work-services');
    }

    public function farmer_club(){
        return view('client.farmer-club');
    }

    public function dealers_meet(){
        return view('client.dealers-meet');
    }

    public function multiplex_vahini(){
        return view('client.multiplex-vahini');
    }

    public function contact(){
        return view('client.contact');
    }


}
