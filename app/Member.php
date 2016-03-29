<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $table = "User";
    //
    public function role(){
    	return $this->belongsTo(UserRole::class);
    }
}

class UserRole extends Model
{
	protected $table = "UserRole";
    //
    public function pasar(){
    	return $this->hasMany(User::class);
    }
}
