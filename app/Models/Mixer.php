<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mixer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'purpose',
        'description',
        'price',
        'image',
        'color',
        'material',
        'mechanism',
    ];

    public $timestamps = false;
}
