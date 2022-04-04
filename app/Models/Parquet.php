<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parquet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'price',
        'description',
        'type',
        'tree',
        'covering',
        'length',
        'width',
        'thickness',
    ];

    public $timestamps = false;
}
