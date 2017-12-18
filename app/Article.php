<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //things we're okay with the user changing
    protected $fillable = [
      'title',
      'body',
      'published_at',
      'user_id'
    ];
    // this treats any date as a Carbon instance, giving it access to all functions that Carbon has access to
    protected $dates = ['published_at'];

    // scopePublished can be used anywhere in our application
    public function scopePublished($query){

      $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnpublished($query){

      $query->where('published_at', '>', Carbon::now());
    }

    public function setPublishedAtAttribute($date){
      // parse can be used to publish this article for a future date
      $this->attributes['published_at'] = Carbon::parse($date);
    }

    public function user()
    {
      // an article belongs to a user
      // App\User relates to the path of the model
      return $this->belongsTo('App\User');
    }

    // get the tags associated with the given article

    public function tags()
    {
      return $this->belongsToMany('App\Tag');

    }
}
