<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;

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
        'routeName',
    ];

    public $timestamps = false;

    public function scopeFilter(Builder $builder, QueryFilter $filter){
        return $filter->apply($builder);
    }
}
