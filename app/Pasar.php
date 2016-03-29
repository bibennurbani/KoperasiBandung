<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasar extends Model
{
	protected $table = "Pasar";
    //
    public function pdpasar()
    {
    	return $this->belongsTo(PDPasar::class);
    }
}
