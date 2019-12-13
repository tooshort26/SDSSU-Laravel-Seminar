<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    protected $fillable = ['name'];

    // Example of one-to-one
    public function relation()
    {
    	return $this->hasOne('App\Relation', 'sample_id', 'id');
    }
}
