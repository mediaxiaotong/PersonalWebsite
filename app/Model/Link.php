<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    //
    public $timestamps=false;
    protected $fillable = [
        'name',
        'title',
        'url',
        'order',
    ];
}
