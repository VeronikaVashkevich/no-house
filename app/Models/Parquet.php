<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;

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

    public function scopeFilter(Builder $builder, QueryFilter $filter){
        return $filter->apply($builder);
    }
}
