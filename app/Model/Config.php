<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    //
    public $timestamps=false;
    protected $fillable = [
        'name',
        'title',
        'content',
        'field_type',
        'field_value',
        'tips',
        'order',
    ];
}
