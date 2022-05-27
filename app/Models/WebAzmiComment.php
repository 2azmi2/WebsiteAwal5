<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebAzmiComment extends Model
{
    private static $title = "Comment";
    public static function getTitle(){
        return self::$title;
    }
}
