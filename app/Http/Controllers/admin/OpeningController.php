<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateOpeningReq;
use App\Http\Requests\UpdateOpeningReq;
use App\Models\Department;
use App\Models\JobApplication;
use App\Models\Location;
use App\Models\Openings;

class OpeningController extends Controller
{
    public function index()
    {
        $data = Openings::orderBy('id', 'desc')->get() ?? [];

        return view('admin.openings.index')->with('page', 'openings')->with('data', $data ?? []);
    }

    public function create()
    {
        $location = Location::get() ?? [];

        return view('admin.openings.create')->with('page', 'openings')->with('location', $location ?? []);
    }

    public function store(CreateOpeningReq $request)
    {
        $data = $request->validated();
        unset($data["_token"]);
        $department = Department::where('id',$data['department'])->first();
        $data['department_name'] = $department->name;
        Openings::create($data);

        return redirect('admin/openings')->with('status', 'Openings saved successfully');
    }

    public function edit($id)
    {
        $openings = Openings::find($id);
        $location = Location::get() ?? [];

        return view('admin.openings.edit')->with('page', 'openings')->with('openings', $openings ?? [])->with('location', $location ?? []);
    }

    public function update(UpdateOpeningReq $request)
    {
        $id = $request->id;
        $data = $request->validated();
        $department = Department::where('id',$data['department'])->first();
        $data['department_name'] = $department->name;
        Openings::where('id', $id)->update($data);

        return redirect('admin/openings')->with('status', 'Openings updated successfully');
    }

    public function destroy($id)
    {
        Openings::where('id', $id)->delete();

        return redirect('admin/openings')->with('status', 'Openings deleted successfully');
    }

    public function job()
    {
        $data = JobApplication::orderBy('id', 'desc')->get();

        return view('admin.job.index')->with('page', 'job')->with('data', $data ?? []);
    }
}
