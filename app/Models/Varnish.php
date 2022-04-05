<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Varnish extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'image',
        'description',
        'appointment',
        'basis',
        'color',
        'weight',
        'time',
        'material',
    ];

    public $timestamps = false;
}
