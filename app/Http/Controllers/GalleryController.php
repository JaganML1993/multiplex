<?php

// app/Http/Controllers/GalleryController.php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.galleries.index', compact('galleries'))->with('page', 'galleries');
    }

    public function create()
    {
        return view('admin.galleries.create')->with('page', 'galleries');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('assets/images'), $imageName);

        Gallery::create([
            'category' => $request->category,
            'image' => $imageName,
        ]);

        return redirect()->route('galleries.index')->with('page', 'galleries')->with('success', 'Gallery item created successfully.');
    }

    public function show(Gallery $gallery)
    {
        return view('admin.galleries.show', compact('gallery'))->with('page', 'galleries');
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.galleries.edit', compact('gallery'))->with('page', 'galleries');
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'category' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('assets/images'), $imageName);
            $gallery->update(['image' => $imageName]);
        }

        $gallery->update([
            'category' => $request->category,
        ]);

        return redirect()->route('galleries.index')->with('page', 'galleries')->with('success', 'Gallery item updated successfully.');
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();

        return redirect()->route('galleries.index')->with('page', 'galleries')->with('success', 'Gallery item deleted successfully.');
    }
}
