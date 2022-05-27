<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebAzmiBio;
use App\Models\Bio;

class WebBioController extends Controller
{
    //
    public function index(){
        $biodata=array(
            "title" => Bio::find(2)->title,
            "nama" => Bio::find(2)->nama,
            "ttl" => Bio::find(2)->ttl,
            "email" => Bio::find(2)->email,
            "nomor" => Bio::find(2)->nomor,
            "okupasi" => Bio::find(2)->okupasi,
            "alamat" => Bio::find(2)->alamat,
            "hobi" => Bio::find(2)->hobi
        );
        return view('about',$biodata);
    }
}
