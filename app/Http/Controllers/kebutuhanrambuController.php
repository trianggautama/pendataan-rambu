<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kebutuhanrambuController extends Controller
{
    public function kebutuhan_index(){
        
        return view('rambu.index');
    }
}
