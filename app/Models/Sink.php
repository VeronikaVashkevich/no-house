<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sink extends Model
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
        'bowls',
        'material',
        'wing',
        'montage',
    ];

    public $timestamps = false;
}
