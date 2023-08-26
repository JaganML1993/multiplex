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

        $image_path = $request->file('resumeFile')->store('resume', 'public');

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

}
