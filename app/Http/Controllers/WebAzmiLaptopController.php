<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebAzmiLaptop;

class WebAzmiLaptopController extends Controller
{
    public function index(){
        return view('Dashboard.laptop',[
            "title" => "Laptop",
            "data" => WebAzmiLaptop::all()
        ]);
    }
    
    public function create(){
        return view("Dashboard.Insert.insertlaptop",[
            "title" => "Insert Data"
        ]);
    }

    public function store(Request $request){
        $validateData=$request->validate([
            'iduser'=>'required',
            'nama'=>'required',
            'namalaptop'=>'required',
            'deskripsi'=>'required'
        ]);
        WebAzmiLaptop::create($validateData);
        $request->session()->flash('success','Data tersimpan');
        return redirect('/laptop');
    }

    public function destroy($id){
        WebAzmiLaptop::destroy($id);
        return redirect('/laptop');
    }

    public function edit($id){
        return view("Dashboard.Edit.editlaptop",[
            "title" => "Edit Data",
            "id" => $id,
            "iduser" => WebAzmiLaptop::find($id)->iduser,
            "nama" => WebAzmiLaptop::find($id)->nama,
            "namalaptop" => WebAzmiLaptop::find($id)->namalaptop,
            "deskripsi" => WebAzmiLaptop::find($id)->deskripsi
        ]);
    }

    public function update(Request $request){
        $laptop = WebAzmiLaptop::find($request->id);

        $laptop->iduser = $request->iduser;
        $laptop->nama = $request->nama;
        $laptop->namalaptop = $request->namalaptop;
        $laptop->deskripsi = $request->deskripsi;

        $laptop->save();
        return redirect('/laptop');
    }

    public function show(){
        return view('Dashboard.laptop',[
            "title" => "Laptop",
            "data" => WebAzmiLaptop::all()
        ]);
    }
}
