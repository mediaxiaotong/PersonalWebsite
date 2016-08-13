<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $fillable = [
        'user_id',
        'content',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo('App\Model\User','user_id','id');
    }
}
