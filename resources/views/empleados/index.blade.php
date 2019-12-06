@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleados</h2>

    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>es responsable de algun proyecto?</th>
      </tr>

      @foreach($empl as $i)

     

      <tr>
        <td>{{$i->id}}</td>
        <td>{{$i->nombre}}</td>
        <td>{{$i->email}}</td>
        <td>{{$i->telefono}}</td>
        <td>{{$i->id}}</td>
      </tr>
      @endforeach

    </table>

@endsection
