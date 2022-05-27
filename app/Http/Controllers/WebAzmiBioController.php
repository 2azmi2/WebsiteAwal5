<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebAzmiBio;

class WebAzmiBioController extends Controller
{
    //
    public function profile(){
        $biodata=array(
            "title" => WebAzmiBio::getTitle(),
            "nama" => WebAzmiBio::getNama(),
            "ttl" => WebAzmiBio::getTtl(),
            "email" => WebAzmiBio::getEmail(),
            "nomor" => WebAzmiBio::getNo(),
            "okupasi" => WebAzmiBio::getOkupasi(),
            "alamat" => WebAzmiBio::getAlamat(),
            "hobi" => WebAzmiBio::getHobi()
        );
        return view('about',$biodata);
    }
}
