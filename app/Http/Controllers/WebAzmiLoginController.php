<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebAzmiLogin;
use Illuminate\Support\Facades\Auth;

class WebAzmiLoginController extends Controller
{
    public function login(){
        return view('login',[
            "title" => WebAzmiLogin::getTitle()
        ]);
    }
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email'=>'required|email:dns',
            'password'=> 'required'
        ]);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/dashboard');
        };
 
        return back()->with('loginError', 'Login Failed!');
    }
    public function logout(Request $request){
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/home');
    }
}
