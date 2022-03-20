<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallpaper extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'texture',
        'color',
        'is_3D',
        'basis',
        'price',
        'description',
    ];

    public $timestamps = false;
}
