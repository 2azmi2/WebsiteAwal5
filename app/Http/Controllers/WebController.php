<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebAzmi;
use App\Models\Home;

class WebController extends Controller
{
    //
    public function index(){
        return view('welcome',[
            "title" => Home::find(2)->title
        ]);
    }
}
