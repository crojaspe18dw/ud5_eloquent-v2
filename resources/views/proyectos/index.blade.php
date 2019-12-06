@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>

    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Titulo</th>
        <th>Fecha Inicio</th>
        <th>Fecha fin</th>
        <th>Horas estimadas</th>
        <th>empleado responsable</th>
      </tr>
      @foreach($proyect as $i)
      <tr>
        <td>{{$i->id}}</td>
        <td>{{$i->nombre}}</td>
        <td>{{$i->titulo}}</td>
        <td>{{$i->fechainicio}}</td>
        <td>{{$i->fechafin}}</td>
        <td>{{$i->horasestimadas}}</td>
        <td><a href="empleados/{{$i->empleados_id}}">{{$i->id}}</a></td>
      </tr>
      @endforeach
    </table>

@endsection
