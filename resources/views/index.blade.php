<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Oferta educativa Universidad Autonoma de Sinaloa</title>
	<link href="{{ URL::asset('css/bootstrapsuperhero.css') }}" rel="stylesheet" type="text/css" >
	
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Oferta educativa Universidad Autonoma de Sinaloa</h1>
				<hr>
			</div>
			<div class="row">
				<div class="col-lg-3">
				 @section('menu')
            			<div class="list-group">
					@foreach($Carrera as $a)
						<a href="{{url('/index')}}/{{$a->id}}" class="list-group-item">{{$a->nombrecarrera}}</a>
					@endforeach
						</div>
       			 @show
       			 </div>
				<div class="col-lg-9">
				@if(isset($Materias))
				  <table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>Materia</th>
								<th>Semestre</th>
								<th>Plan de estudios</th>
							</tr>
						</thead>
						<tbody>
								@foreach($Materias as $a)
									<tr align="center">
										<td>{{$a->nombremateria}}</td>
										<td>{{$a->semestremateria}}</td>	
										<td><a href="#"><span class="glyphicon glyphicon-file"></span></a></td>
									</tr>
								@endforeach		
						</tbody>
					</table>
				@endif			 
				</div>					
		</div>
		<br>

	</div>
</body>
</html>