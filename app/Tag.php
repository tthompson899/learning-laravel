<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
    * Fillable fields for the tag input field
    *
    */
    protected $fillable = [
        'name'
    ];
    
    /**
    * Get the articles associated with the given tag
    *
    */
    public function articles()
    {
        return $this->belongsToMany('App\Article')->withTimestamps();
    }
}
