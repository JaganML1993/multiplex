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

}
