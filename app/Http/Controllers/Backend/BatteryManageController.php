<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BatteryManage;
use Illuminate\Http\Request;

class BatteryManageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $manage = BatteryManage::latest()->get();
        
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
        BatteryManage::create($request->only([
            'name',
            'phone_number',
            'serial_key',
            'vehicle',
            'purchase_date',
            'purchase_dlr',
        ]));
        return redirect()->back()->with('Battery Manage Information created successfully....!!!!');
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
        BatteryManage::where('id',$id)->update($request->only([
            'name',
            'phone_number',
            'serial_key',
            'vehicle',
            'purchase_date',
            'purchase_dlr',
        ]));
        return redirect()->back()->with('Battery Manage Information updated successfully....!!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        BatteryManage::where('id',$id)->delete();
        return redirect()->back()->with('Battery Manage information deleted successfully...!!!');
    }
}
