<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Award;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $awards = Award::latest()->get();
        return view('backend.special-awards.award-slider.index', compact('awards'));
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
        $awards = $request->only([
            'image_alt',
            'title',
        ]);
        if($request->hasFile('image'))
        {
            $extension = $request->image->getClientOriginalExtension();
            $name = (time()).".".$extension;
            $path = "public/images/about/awards/";
            $request->image->move($path, $name);
            $awards['image'] =  $path.$name;
        }
        Award::create($awards);
        return redirect()->back()->with('Awards created successfully...!!!!');
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
        $award = Award::findOrFail($id);
        return view('backend.special-awards.award-slider.edit', compact('award'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $awards = $request->only([
            'image_alt',
            'title',
        ]);
        if($request->hasFile('image'))
        {
            $extension = $request->image->getClientOriginalExtension();
            $name = (time()).".".$extension;
            $path = "public/images/about/awards/";
            $request->image->move($path, $name);
            $awards['image'] =  $path.$name;
        }
        Award::where('id',$id)->update($awards);
        return redirect()->back()->with('Awards created successfully...!!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $award = Award::findOrFail($id);
        $award->delete();
        
        return redirect()->back()->with('Award Deleted Successfully...!!!!');
    }
}
