<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebAzmiLogin extends Model
{
    use HasFactory;
    private static $title = "Login";
    public static function getTitle(){
        return self::$title;
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
}
