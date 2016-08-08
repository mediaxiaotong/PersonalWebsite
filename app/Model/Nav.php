<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Nav extends Model
{
    //
    public $timestamps=false;
    protected $fillable = [
        'name',
        'url',
        'order',
    ];
}
