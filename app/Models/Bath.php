<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bath extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'material',
        'form',
        'maxLoad',
        'montageType',
        'color',
        'width',
        'height',
        'depth',
    ];

    public $timestamps = false;
}
