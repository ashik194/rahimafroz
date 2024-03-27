<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BecomeDealer;
use Illuminate\Http\Request;

class BecomeDealerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dealer = BecomeDealer::latest()->get();
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
        BecomeDealer::create($request->only([
            'full_name',
            'name_of_company',
            'phone_number',
            'email',
            'district',
            'thana',
            'zip_code',
            'captcha',
        ]));
        
        return redirect()->back()->with("Thanks for sharing your informations. We will let you know");
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
        BecomeDealer::where('id',$id)->update($request->only([
            'full_name',
            'name_of_company',
            'phone_number',
            'email',
            'district',
            'thana',
            'zip_code',
            'captcha',
        ]));

        return redirect()->back()->with('Dealer information updated successful...!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        BecomeDealer::where('id',$id)->delete();
        return redirect()->back()->with('Dealer information deleted successfully...!!!');
    }
}
