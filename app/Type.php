<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
	protected $table = "Type";
	
    public function status(){
    	return $this->hasMany(Status::class);
    }
}
