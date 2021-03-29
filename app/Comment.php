<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=['name','comment_text'];
    public function posts()
    {
        return $this->belongsTo('App\Post');
    }
}
