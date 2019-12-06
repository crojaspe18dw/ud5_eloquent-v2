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
      </tr> 
      <tr>
        <td>{{$proyect->id}}</td>
        <td>{{$proyect->nombre}}</td>
        <td>{{$proyect->titulo}}</td>
        <td>{{$proyect->fechainicio}}</td>
        <td>{{$proyect->fechafin}}</td>
        <td>{{$proyect->horasestimadas}}</td>
      </tr>
    </table>

@endsection