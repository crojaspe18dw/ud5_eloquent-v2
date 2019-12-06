<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Proyecto;
use App\Empleado;

class controlador_para_proyectos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyect=Proyecto::all();
        $empleado=Empleado::all();

        return view('proyectos.index',compact('proyect','empleado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyectos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validaciondelosformulariosdeproyectos $request)
    {
        $insertar=new Proyecto;
        $insertar->nombre=$request->nombre;
        $insertar->titulo=$request->titulo;
        $insertar->fechainicio=$request->fechainicio;
        $insertar->fechafin=$request->fechafin;
        $insertar->horasestimadas=$request->horasestimadas;
        $insertar->empleados_id=$request->empleados_id;
        $insertar->save();

        return redirect('proyectos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyect=Proyecto::find($id);
        return view('proyectos.show',compact('proyect')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto=Proyecto::find($id);
        return view('proyectos.edit',compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validaciondelosformulariosdeproyectos $request, $id)
    {
        $proyecto=Proyecto::find($id);
        $proyecto->update($request->all());
        return redirect('proyectos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proyecto=Proyecto::find($id);

        $proyecto->delete();

        return redirect('proyectos');
    }
}
