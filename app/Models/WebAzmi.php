<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebAzmi extends Model
{
    private static $title = "Home";
    public static function getTitle(){
        return self::$title;
    }
}
