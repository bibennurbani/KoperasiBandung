<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PDpasar extends Model
{
	protected $table = "PDPasar";
    //
    public function pasar(){
    	return $this->hasMany(Pasar::class);
    }
}
