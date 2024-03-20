<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SpecialAward;
use Illuminate\Http\Request;

class SpecialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $special_awards = SpecialAward::latest()->get();
        return view('backend.special-awards.award-list.index', compact('special_awards'));
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
        $special = $request->only([
            'image_alt',
            'description',
        ]);
        if($request->hasFile('image'))
        {
            $extension = $request->image->getClientOriginalExtension();
            $name = (time()).".".$extension;
            $path = "public/images/about/special/";
            $request->image->move($path, $name);
            $special['image'] =  $path.$name;
        }
        SpecialAward::create($special);
        return redirect()->back()->with('Special Awards created successfully...!!!!');
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
        $special = SpecialAward::findOrFail($id);
        return view('backend.special-awards.award-list.edit', compact('special'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $special = $request->only([
            'image_alt',
            'description',
        ]);
        if($request->hasFile('image'))
        {
            $extension = $request->image->getClientOriginalExtension();
            $name = (time()).".".$extension;
            $path = "public/images/about/special/";
            $request->image->move($path, $name);
            $special['image'] =  $path.$name;
        }
        SpecialAward::where('id',$id)->update($special);
        return redirect()->back()->with('Special Awards update successfully...!!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $special = SpecialAward::findOrFail($id);
        $special->delete();
        return redirect()->back()->with('Special Award Deleted Successfully....!!!');
    }
}
