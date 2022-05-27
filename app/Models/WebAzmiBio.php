<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebAzmiBio extends Model
{
    private static $title = "Biodata";
    private static $nama = "R.Muhammad Azmi Herdi Shofiyullah";
    private static $ttl ="Jember, 12 September 2001";
    private static $email = "azmikamikaze@gmail.com";
    private static $noTelp = "08983443588";
    private static $okupasi = "Mahasiswa Polinema Tingkat 2";
    private static $alamat = "Jl.Mangun Sarkoro Gg.III / 2448";
    private static $hobi = "Menonton Anime, Bermain Game, Membaca Manga";

    public static function getTitle(){
        return self::$title;
    }
    public static function getNama(){
        return self::$nama;
    }
    public static function getTtl(){
        return self::$ttl;
    }
    public static function getEmail(){
        return self::$email;
    }
    public static function getNo(){
        return self::$noTelp;
    }
    public static function getOkupasi(){
        return self::$okupasi;
    }
    public static function getAlamat(){
        return self::$alamat;
    }
    public static function getHobi(){
        return self::$hobi;
    }
}