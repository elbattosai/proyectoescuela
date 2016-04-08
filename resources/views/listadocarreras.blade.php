@extends('index')
@section('listadocarreras')
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
							<td><a href="{{url('/generarPDF')}}/{{$a->id}}"><span class="glyphicon glyphicon-file"></span></a></td>
						</tr>
					@endforeach		
			</tbody>
		</table>
@stop
@section('menu')
   @parent
	<div class="list-group">
		@foreach($Carrera as $a)
			<a href="{{url('/listadocarreras')}}/{{$a->id}}" class="list-group-item">{{$a->nombrecarrera}}</a>
		@endforeach
	</div>
@endsection