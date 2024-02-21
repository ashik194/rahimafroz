<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function getAllMenus(){
        $test;
        return view('home.index',compact('test'));
    }
}
