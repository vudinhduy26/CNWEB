<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class page extends Controller
{
    //
    function getindex(){
        return view('master');
    }
}
