<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="/proyectos/">
		{{csrf_field()}}

		<input type="text" name="nombre" placeholder="nombre..."><br><br>
		<input type="text" name="titulo" placeholder="titulo..."> <br><br>
		<input type="text" name="fechainicio" placeholder="fecha inicio..."><br><br>
		<input type="text" name="fechafin" placeholder="fecha fin..."><br><br>
		<input type="number" name="horasestimadas" placeholder="horas estimadas..."><br><br>
		<input type="number" name="empleados_id" placeholder="id del empleado responsable..."><br><br><br><br>
		
		
		<input type="submit" name="enviar" value="enviar">
	</form>
</body>
</html>