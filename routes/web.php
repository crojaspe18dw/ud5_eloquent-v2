<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::resource('empleados','controlador_para_empleados');

Route::resource('departamentos','controlador_para_departamentos');

Route::resource('proyectos','controlador_para_proyectos');



