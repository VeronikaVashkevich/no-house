<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;

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

    public function scopeFilter(Builder $builder, QueryFilter $filter){
        return $filter->apply($builder);
    }
}
