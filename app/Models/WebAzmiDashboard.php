<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebAzmiDashboard extends Model
{
    use HasFactory;
    private static $title = "Dashboard";
    public static function getTitle(){
        return self::$title;
    }
}
