<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Proyectos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos',function( BLueprint $table){
            $table->bigIncrements('id');
            $table->String('nombre',255)->required();
            $table->String('titulo',255)->required();
            $table->String('fechainicio')->required();
            $table->String('fechafin')->required();
            $table->integer('horasestimadas')->required();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::DropIfExists('proyectos');
    }
}
