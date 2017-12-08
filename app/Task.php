<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  protected $fillable = [
    'taskname',
    'taskbody',
    'published_at'
  ];
}
