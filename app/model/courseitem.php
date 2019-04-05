<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class courseitem extends Model
	{
	    public function files(){
		return $this->hasMany('App\model\coursefile');
	}
}