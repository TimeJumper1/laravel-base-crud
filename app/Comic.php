<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    //
    protected $fillable = [
        'title',
        'type',
        'thumb',
        'price',
        'series',
        'description',
        'sale_date'
    ];
}
