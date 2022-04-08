<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;

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

    public function scopeFilter(Builder $builder, QueryFilter $filter){
        return $filter->apply($builder);
    }
}
