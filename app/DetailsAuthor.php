<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailsAuthor extends Model
{
    protected $fillable=['pic','biography','instagram','twitter','facebook','linkedin'];
    public function author()
    {
        return $this->belongsTo('App\Author');
    }
}
