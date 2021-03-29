<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable=['name','lastname','mail'];

    public function detailsAuthor()
    {
        return $this->hasOne('App\DetailsAuthor');
    }
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
