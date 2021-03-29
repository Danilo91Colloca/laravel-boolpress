<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['post_title','paragraph'];

    public function author()
    {
        return $this->belongsTo('App\Author');
    }
}
