<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\System;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SystemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('backend.app.system');
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
    public function edit(string $id='1')
    {
        //
        $system = DB::table('systems')->where('id',$id)->first();
        return view('backend.app.system', compact('system'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $system = $request->only([
            'phone_number',
            'fax',
            'email',
            'office_address',
            'copyright_text',
            'about_title',
            'buy_now_url',
            'video',
            'facebook',
            'instagram',
            'linkedin',
            'youtube',
            'youtube_video',
            'facebook_page',
            'instagram_page',
            'linkedin_page',
            'footer_short_desc',
            'about_desc'
            ]);

            if($request->hasFile('header_logo'))
            {
                $extension = $request->header_logo->getClientOriginalExtension();
                $name = (time()).".".$extension;
                $path = "public/images/system/header-logo/";
                $request->header_logo->move($path, $name);
                $system['header_logo'] =  $path.$name;
            }
            if($request->hasFile('years_logo'))
            {
                $extension = $request->years_logo->getClientOriginalExtension();
                $name = (time()).".".$extension;
                $path = "public/images/system/years-logo/";
                $request->years_logo->move($path, $name);
                $system['years_logo'] =  $path.$name;
            }
            if($request->hasFile('footer_logo'))
            {
                $extension = $request->footer_logo->getClientOriginalExtension();
                $name = (time()).".".$extension;
                $path = "public/images/system/footer-logo/";
                $request->footer_logo->move($path, $name);
                $system['footer_logo'] =  $path.$name;
            }

            System::whereId($id)->update($system);

        return redirect()->back()->with("System Information Updated Successfully....");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
