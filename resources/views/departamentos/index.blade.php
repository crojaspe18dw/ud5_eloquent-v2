@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamentos</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
    </tr>

    @foreach($departamento as $i)

    <tr>
      <td>{{$i->id}}</td>
      <td>{{$i->nombre}}</td>
    </tr>

    @endforeach

  </table>

@endsection
