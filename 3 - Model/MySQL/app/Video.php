<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['title', 'url'];

    public function user_comments()
    {
    	return $this->morphMany('App\UserComment', 'commentable');
    }
}
