<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebAzmi;

class WebAzmiController extends Controller
{
    //
    public function home(){
        return view('welcome',[
            "title" => WebAzmi::getTitle()
        ]);
    }
}
