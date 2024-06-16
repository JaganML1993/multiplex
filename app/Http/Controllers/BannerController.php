<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banner = Banner::orderBy('id', 'desc')->get();
        return view('admin.banner.index', compact('banner'))->with('page', 'banner');
    }

    public function create()
    {
        $banner = Banner::first();
        return view('admin.banner.create', compact('banner'))->with('page', 'banner');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $imageName = 'banner_image_multi_2024' . '.' . $request->image->extension();
        $request->image->move(public_path('assets/images'), $imageName);

        $banner = Banner::first();
        if(empty($banner)){
            Banner::create([
                'image' => $imageName,
            ]);
            $msg = 'Created';
        }else{
            Banner::where('id', $banner->id)->update(['image' => $imageName]);
            $msg = 'Updated';
        }

        return redirect()->route('banner.index')->with('page', 'banner')->with('status', 'Banner '.$msg.' successfully.');
    }

    public function show(Banner $banner)
    {
        return view('admin.banner.show', compact('banner'))->with('page', 'banner');
    }

    public function edit(Banner $banner)
    {
        return view('admin.banner.edit', compact('banner'))->with('page', 'banner');
    }

    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images'), $imageName);
            $banner->update(['image' => $imageName]);
        }

        $banner->update([
            'category' => $request->category,
        ]);
        return redirect()->route('banner.index')->with('page', 'banner')->with('status', 'Banner updated successfully.');
    }

    public function destroy(Banner $banner)
    {
        $banner->delete();

        return redirect()->route('banner.index')->with('page', 'banner')->with('status', 'Banner deleted successfully.');
    }
}
