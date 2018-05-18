@extends('layouts.app')

@section('content')
	<div class="center">
		
	<h2>¡Felicidades {{\Auth::user()->name}}!</h2>
	<h3>Terminaste el juego con el siguiente puntaje:</h3>
	<h4>Puntos: {{$puntuacion->puntuacion}} en {{$puntuacion->time}} segundos</h4>
	<br>
	<br>
	<h3>Tabla de puntaje</h3>
	<table class="table table-condensed">
		<thead>
			<tr>
				<th>Lugar</th>
				<th>Nombre</th>
				<th>Puntuación</th>
				<th>Tiempo</th>
			</tr>
		</thead>
		<tbody>
			@foreach($puntuaciones as $point)
				<tr class="{{$point->id == $puntuacion->id ? 'success' : 'default'}}">
					<td>{{$loop->iteration}}</td>
					<td>{{$point->user->name}}</td>
					<td>{{$point->puntuacion}}</td>
					<td>{{$point->time}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<br>
	<br>
	<a href="/quiz" class="btn btn-info">¡Volver a jugar!</a>
	</div>
@endsection