<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebAzmiRegister extends Model
{
    use HasFactory;
    private static $title = "Register";
    public static function getTitle(){
        return self::$title;
    }
}
