<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
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
        $brand = $request->only([
            'brand_name',
            'brand_alt',
        ]);

        if($request->hasFile('brand_image'))
        {
            $extension = $request->brand_image->getClientOriginalExtension();
            $name = (time()).".".$extension;
            $path = "public/images/brand/";
            $request->brand_image->move($path, $name);
            $brand['brand_image'] =  $path.$name;
        }

        Brand::create($brand);
        return redirect()->back()->with('Brand Created Successful...!!!');
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
        $brand = $request->only([
            'brand_name',
            'brand_alt',
        ]);

        if($request->hasFile('brand_image'))
        {
            if($request->brand_image !=''){
                unlink($request->brand_image);
            }
            $extension = $request->brand_image->getClientOriginalExtension();
            $name = (time()).".".$extension;
            $path = "public/images/brand/";
            $request->brand_image->move($path, $name);
            $brand['brand_image'] =  $path.$name;
        }

        Brand::where('id',$id)->update($brand);
        return redirect()->back()->with('Brand Updated Successful...!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Brand::where('id',$id)->delete();
        return redirect()->back()->with('Brand Deleted Successfully..');
    }
}
