<?php

use Illuminate\Database\Seeder;

class seeder_para_empleados extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 10; $i++) { 
    	
	        DB::table('empleados')->insert([
	        	'nombre'=>'nombre pueba e',
	        	'apellido'=>'apellido prueba e',
	        	'email'=>'prueba@prueba.com',
	        	'telefono'=>'675678876566778877',
	        ]);
    	}
    }
}
