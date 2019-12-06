<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    public function empleados(){
      return $this->hasOne('App\Empleado');
    }
}
