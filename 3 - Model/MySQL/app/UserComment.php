<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserComment extends Model
{
	protected $fillable = ['body', 'text', 'commentable_id', 'commentable_type'];

    public function commentable()
    {
    	return $this->morphTo();
    }
}
