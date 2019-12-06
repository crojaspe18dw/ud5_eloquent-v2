<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    public function Empleado(){

    	return $this->belongsTo('App\Proyecto');

    }
}
