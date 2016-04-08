@extends('index')
@section('carreras')
	<div class="list-group">
		@foreach($Carrera as $a)
			<a href="{{url('/listadocarreras')}}/{{$a->id}}" class="list-group-item">{{$a->nombrecarrera}}</a>
		@endforeach
	</div>
@stop