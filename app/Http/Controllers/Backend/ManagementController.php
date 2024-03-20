<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ManagementInfo;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $managements = ManagementInfo::latest()->get();
        return view("backend.about.management.index", compact('managements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $management = $request->only([
            'image_alt',
            'management_name',
            'designation',
            'description',
            'facebook',
            'instagram',
            'linkedin',
        ]);
        if($request->hasFile('image'))
        {
            $extension = $request->image->getClientOriginalExtension();
            $name = (time()).".".$extension;
            $path = "public/images/about/management/";
            $request->image->move($path, $name);
            $management['image'] =  $path.$name;
        }
        ManagementInfo::create($management);
        return redirect()->back()->with('Management Info Inserted Successfully...!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $management = ManagementInfo::findOrFail($id);
        return view('backend.about.management.edit', compact('management'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $management = $request->only([
            'image_alt',
            'management_name',
            'designation',
            'description',
            'facebook',
            'instagram',
            'linkedin',
        ]);
        if($request->hasFile('image'))
        {
            $request->image?unlink($request->image):"";
            $extension = $request->image->getClientOriginalExtension();
            $name = (time()).".".$extension;
            $path = "public/images/about/management/";
            $request->image->move($path, $name);
            $management['image'] =  $path.$name;
        }
        ManagementInfo::where('id',$id)->update($management);
        return redirect()->back()->with("Management Information Updated Successfully...!!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $management = ManagementInfo::findOrFail($id);
        $management->image?unlink($management->image):"";
        $management->delete();
        return redirect()->back()->with('Management Information Deleted Successfully...!!');
    }
}
