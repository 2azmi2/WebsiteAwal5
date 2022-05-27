<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebAzmiLaptop extends Model
{
    use HasFactory;
    protected $fillable = [
        'iduser',
        'nama',
        'namalaptop',
        'deskripsi',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
