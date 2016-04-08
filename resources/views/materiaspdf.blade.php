<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style>
		table{
			border-style: solid;
			border: 3px;
			border-collapse: all;
		}
		.trcabecera{
			background: #5D5A5A;
		}
		.trcontenido{
			background: #B2B2B2;
		}
		.trBordes{
			border-style: solid;
			border-width: 2px;
		}
	</style>
</head>
<body>
	<h1>Reporte de Alumnos</h1>
	<table align="center">
	<tr class="trcabecera trBordes">
		<td>Nombre de la Materia</td>
	</tr>
		<tr class="trcontenido trBordes">
		 @foreach($temas as $a)
		 		<td>{{$a->nombretema}}</td>
		  @endforeach
	 	</tr>
	</table>
</body>
</html>