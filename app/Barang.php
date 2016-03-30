<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
	protected $table = "Barang";
    //
    public function pasar(){
    	return $this->belongsToMany(Pasar::class);
    }
}
