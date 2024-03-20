<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\WhyChooseRahimafrooz;
use Illuminate\Http\Request;

class WhyChooseUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $wcu = $request->only([
            'image_alt',
            'title',
            'short_desc',
        ]);
        if($request->hasFile('image'))
        {
            $extension = $request->image->getClientOriginalExtension();
            $name = (time()).".".$extension;
            $path = "public/images/why-choose-us/";
            $request->image->move($path, $name);
            $wcu['image'] =  $path.$name;
        }

        WhyChooseRahimafrooz::create($wcu);
        return redirect()->back()->with('Why Choose Us data created Successfylly... !!');
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $wcu = $request->only([
            'image_alt',
            'title',
            'short_desc',
        ]);
        if($request->hasFile('image'))
        {
            $extension = $request->image->getClientOriginalExtension();
            $name = (time()).".".$extension;
            $path = "public/images/why-choose-us/";
            $request->image->move($path, $name);
            $wcu['image'] =  $path.$name;
        }

        WhyChooseRahimafrooz::where('id',$id)->update($wcu);
        return redirect()->back()->with('Why Choose Us data created Successfylly... !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        WhyChooseRahimafrooz::where('id',$id)->delete();
        return redirect()->back()->with('Why Choose Us data Deleted Successfully...!!!!!');
    }
}
