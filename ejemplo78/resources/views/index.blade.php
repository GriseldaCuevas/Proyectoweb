<!DOCTYPE html>

<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>{{$titulo}}</title>
		<link rel="stylesheet" type="text/css" href="http://localhost:8000/css/estilo.css"/>
		<link rel="stylesheet" type="text/css" href="http://localhost:8000/css/estilos.css"/>
		<link rel="stylesheet" type="text/css" href="http://localhost:8000/bootstrap/css/bootstrap.min.css"/>
	</head>
	<body>
		<section id="contenedor">
			<section id="norte">
				<header>
					<div align="center">
						<img src="http://localhost:8000/img/teec.jpg" WIDTH="150%" HEIGHT="150"></img>
					</div>
				</header>
			</section>
			<section id="oeste" class="bloque">
				<table border="1" width="100%">
					<tr>
						<td><a href="http://localhost:8000/">Inicio</a></td>
					</tr>
					@foreach($materias as $materia)
						<tr>
							<td><a href="http://localhost:8000/materia/{{$materia->id}}">{{$materia->nombre}}</a></td>
						</tr>
					@endforeach
				</table>
			</section>
			<section id="este" class="bloque">
				@yield('contenido')
			</section>
			<section id="sur">
				<div id="foot" class="panel-footer"><small>Eaborado por Gallardo Yovana, Alaniz Alejandra, Enrique Rubio, José Luis Lopez, Pedro Enrriquez &copy;2015</small></div>
			</section>
		</section>
		<script src="http://localhost:8000/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>