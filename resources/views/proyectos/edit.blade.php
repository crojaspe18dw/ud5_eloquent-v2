<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="/proyectos/{{$proyecto->id}}">
		{{csrf_field()}}

		<input type="text" name="titulo" value="t{{$proyecto->titulo}}"> <br><br>
		<input type="text" name="fechainicio" value="{{$proyecto->fechainicio}}"><br><br>
		<input type="text" name="fechafin" value="{{$proyecto->fechafin}}"><br><br>
		<input type="number" name="horasestimadas"  value="{{$proyecto->horasestimadas}}"><br><br>
		<input type="number" name="empleados_id" value="{{$proyecto->empleados_id}}"><br><br><br><br>
		<input type="hidden" name="_method" value="PUT">

		
		
		<input type="submit" name="enviar" value="enviar">
	</form>



	<form method="POST" action="/proyectos/{{$proyecto->id}}">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="DELETE">
		<input type="submit" value="eliminar registro">


	</form>
</body>
</html>