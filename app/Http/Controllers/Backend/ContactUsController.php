<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $contact = ContactUs::latest()->get();
        return view("backend.contact-us.contact-us.index", compact('contact'));
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
        $contact = $request->only([
            'full_name',
            'phone',
            'email',
            'message',
            'captcha',
        ]);
        ContactUs::create($contact);
        return redirect()->back()->with('Contact Inforamtion send successfully...!!!');
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
        $contact = ContactUs::findOrFail($id);
        return view('backend.contact-us.contact-us.edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $contact = $request->only([
            'full_name',
            'phone',
            'email',
            'message',
            'captcha',
        ]);
        ContactUs::where('id',$id)->update($contact);
        return redirect()->back()->with('Contact Inforamtion updated successfully...!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        ContactUs::where('id',$id)->delete();
        return redirect()->back()->with("Contact information deleted successfully....!!!");
    }
}
