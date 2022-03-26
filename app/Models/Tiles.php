<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiles extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'price',
        'description',
        'image',
        'color',
        'form',
        'frostResistance',
        'wearClass',
        'purpose',
        'width',
        'height',
        'depth',
    ];

    public $timestamps = false;
}
