<?php

use Illuminate\Database\Seeder;

class seeder_para_la_tabla_proyectos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) { 
        	
        	DB::table('proyectos')->insert([
        		'nombre'=>'nombre prueba',
        		'titulo'=>'titulo prueba',
        		'fechainicio'=>'12/5/2099',
        		'fechafin'=>'23/53/1278',
        		'horasestimadas'=>'100',
        	]);





        }
    }
}
