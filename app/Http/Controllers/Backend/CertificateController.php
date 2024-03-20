<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
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
        $certificate = $request->only([
            'title',
            'image_alt',
        ]);

        if($request->hasFile('image'))
        {
            $extension = $request->image->getClientOriginalExtension();
            $name = (time()).".".$extension;
            $path = "public/images/certificate/";
            $request->image->move($path, $name);
            $certificate['image'] =  $path.$name;
        }

        Certificate::create($certificate);
        return redirect()->back()->with('Certificate Created Successful...!!!');
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
        $certificate = $request->only([
            'title',
            'image_alt',
        ]);

        if($request->hasFile('image'))
        {
            $extension = $request->image->getClientOriginalExtension();
            $name = (time()).".".$extension;
            $path = "public/images/certificate/";
            $request->image->move($path, $name);
            $certificate['image'] =  $path.$name;
        }

        Certificate::where('id',$id)->update($certificate);
        return redirect()->back()->with('Certificate updated Successful...!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Certificate::where('id',$id)->delete();
        return redirect()->back()->with('Certificate Deleted Successfully...!!!!');
    }
}
