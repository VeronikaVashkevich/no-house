<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laminate extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'color',
        'abrasionResistanceClass',
        'loadClass',
        'vShape',
        'lockClass',
        'corkLayer',
        'width',
        'length',
        'height',
    ];

    public $timestamps = false;
}
