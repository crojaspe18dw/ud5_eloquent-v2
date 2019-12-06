<?php

use Illuminate\Database\Seeder;

class seeder_para_departamentos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert([
        	'nombre'=>'departamento uno',
        ]);



        DB::table('departamentos')->insert([
        	'nombre'=>'departamento dos',
        ]);




        DB::table('departamentos')->insert([
        	'nombre'=>'departamento tres',
        ]);
    }
}
