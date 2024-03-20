<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sliders = Slider::latest()->get();
        return view('backend.slider.index', compact('sliders'));
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
        $slider = $request->only([
            'slider_title',
            'slider_alt',
        ]);
        if($request->hasFile('slider_image'))
        {
            $extension = $request->slider_image->getClientOriginalExtension();
            $name = (time()).".".$extension;
            $path = "public/images/slider/";
            $request->slider_image->move($path, $name);
            $slider['slider_image'] =  $path.$name;
        }
        Slider::create($slider);
        return redirect()->back()->with('Slider Created Successfully...');
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
        $slider = Slider::findOrFail($id);
        return view('backend.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $slider = $request->only([
            'slider_title',
            'slider_alt',
        ]);
        if($request->hasFile('slider_image'))
        {
            $extension = $request->slider_image->getClientOriginalExtension();
            $name = (time()).".".$extension;
            $path = "public/images/slider/";
            $request->slider_image->move($path, $name);
            $slider['slider_image'] =  $path.$name;
        }
        Slider::whereId($id)->update($slider);
        return redirect()->back()->with('Slider Updated Successfully...');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $slider = Slider::findOrFail($id);
        $slider->delete();
        return redirect()->back()->with('Slider Deleted Successfully...!!!');
    }
}
