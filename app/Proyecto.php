<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model

{

	protected $fillable=['nombre','titulo','fechainicio','fechafin','horasestimadas'];


    public function Empleado(){



    	return $this->belongsTo('App\Proyecto');

    }
}
