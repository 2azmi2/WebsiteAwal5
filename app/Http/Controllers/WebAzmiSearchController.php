<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebAzmiLaptop;

class WebAzmiSearchController extends Controller
{
    public function search(Request $request){
        $search = $request->search;
 
		$laptop = WebAzmiLaptop::where('nama', 'LIKE', "%{$search}%") 
        ->orWhere('namalaptop', 'LIKE', "%{$search}%") 
        ->get();
 
		return view('Dashboard/laptop',['data' => $laptop],['title' => 'Laptop'],compact('laptop'));
    }
}
