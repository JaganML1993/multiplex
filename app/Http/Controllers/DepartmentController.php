<?php

// app/Http/Controllers/DepartmentController.php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::orderBy('id', 'desc')->get();
        return view('admin.departments.index', compact('departments'))->with('page', 'departments');
    }

    public function create()
    {
        return view('admin.departments.create')->with('page', 'departments');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'type' => 'required'
        ]);

        Department::create($request->all());

        return redirect()->route('departments.index')->with('success', 'Department created successfully.');
    }

    public function show(Department $department)
    {
        return view('departments.show', compact('department'));
    }

    public function edit(Department $department)
    {
        return view('admin.departments.edit', compact('department'))->with('page', 'departments');
    }

    public function update(Request $request, Department $department)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:departments,email,' . $department->id,
            'type' => 'required'
        ]);

        $department->update($request->all());

        return redirect()->route('departments.index')->with('success', 'Department updated successfully.');
    }

    public function destroy(Department $department)
    {
        $department->delete();

        return redirect()->route('departments.index')->with('success', 'Department deleted successfully.');
    }
}
