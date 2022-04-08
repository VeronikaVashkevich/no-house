<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;

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

    public function scopeFilter(Builder $builder, QueryFilter $filter){
        return $filter->apply($builder);
    }
}
