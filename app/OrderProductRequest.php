<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProductRequest extends Model
{
    //

    public function images(){
    	return $this->hasOne("App\OrderFormImage",'order_id');
    }
	
	public function multiple_images(){
    	return $this->hasMany("App\OrderFormImage",'order_id');
    }
}
