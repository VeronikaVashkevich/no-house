<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Door extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'price',
        'description',
        'image',
        'glass',
        'color',
        'construction',
        'doorTrim',
        'height',
        'width',
    ];

    public $timestamps = false;
}
