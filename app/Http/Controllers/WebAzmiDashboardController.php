<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebAzmiDashboard;

class WebAzmiDashboardController extends Controller
{
    public function index(){
        return view('Dashboard.dashboard',[
            "title" => WebAzmiDashboard::getTitle()
        ]);
    }
}
