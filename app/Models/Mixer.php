<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;

class Mixer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'purpose',
        'description',
        'price',
        'image',
        'color',
        'material',
        'mechanism',
    ];

    public $timestamps = false;

    public function scopeFilter(Builder $builder, QueryFilter $filter){
        return $filter->apply($builder);
    }
}
