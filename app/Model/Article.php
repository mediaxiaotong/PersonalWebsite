<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public $timestamps = true;

    protected $fillable = [
        'title',
        'tag',
        'description',
        'thumb',
        'content',
        'editor',
        'view',
        'cate_id',
        'order',
    ];

    public function category()
    {
        return $this->belongsTo('App\Model\Category','category_id','id');
    }

}
