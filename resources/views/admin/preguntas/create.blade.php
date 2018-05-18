@extends('layouts.app')

@section('style')
	<link href="{{ asset('/css/select2/select2.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/select2/select2-bootstrap.min.css') }}" rel="stylesheet">
@endsection


@section('content')
	<div class="panel panel-success">
 		<div class="panel-heading">Administrador de preguntas</div>
 		<div class="panel-body">
 			<form method="POST" action="{{route('pregunta.store')}}">
 				{{ csrf_field() }}
 				<div class="form-group">
 				<label for="pregunta">Escriba la pregunta.</label>
 					<input class="form-control" type="text" name="pregunta" placeholder="Escriba la pregunta">
 				</div>
 				<div class="form-group">
 					<label for="correctas">Escriba la(s) respuesta(s) correcta(s)</label>
 					<select class="correcta form-control" multiple name="correctas[]"></select>
 				</div>
 				<div class="form-group">
 					<label for="incorrectas">Escriba la(s) respuesta(s) incorrecta(s)</label>
 					<select class="incorrecta form-control" multiple name="incorrectas[]"></select>
 				</div>
 				<button type="submit" class="form-control col-md-12 btn btn-warning">Guardar</button>
 			</form>
 		</div>
	</div>
@endsection

@section('javascript')
	<script src="{{ asset('/js/select2.min.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.correcta').select2({
				theme: "bootstrap",
				placeholder: "Escriba la respuesta correcta",
				tags: true,
				allowClear: true
			});
			$('.incorrecta').select2({
				theme: "bootstrap",
				placeholder: "Escriba la respuesta correcta",
				tags: true,
				allowClear: true
			});
		});
	</script>
@endsection