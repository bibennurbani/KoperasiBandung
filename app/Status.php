<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
	protected $table = "Status";
	
    public function type()
    {
    	return $this->belongsTo(Type::class);
    }
}
