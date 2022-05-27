<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebAzmiRegister;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class WebAzmiRegisterController extends Controller
{
    public function index(){
        return view('register',[
            "title" => WebAzmiRegister::getTitle()
        ]);
    }
    public function store(Request $request){
        $validateData=$request->validate([
            'nama'=>'required',
            'email'=>'required',
            'password'=>'required',
            'alamat'=>'required',
            'nomor'=>'required'
        ]);
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        $request->session()->flash('success','Data tersimpan');
        return redirect('/register');
    }
}
