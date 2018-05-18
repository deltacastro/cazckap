<div class="col-md-12">
	<form method="POST" action="{{route('quiz.store')}}">
		{{ csrf_field() }}
		@foreach($preguntas as $pregunta)
			<div class="form-group">
				<label>{{$pregunta->pregunta}}</label>
				@foreach($pregunta->respuestas()->inRandomOrder()->get() as $respuesta)
					<div class="radio">
						<label class="quiz"><input class="" type="radio" name="respuesta[{{$pregunta->id}}]" value="male"> {{$respuesta->respuesta}}</label>
					</div>
				@endforeach
				
			</div>
		@endforeach
		<button type="submit" class="btn btn-info col-md-12">Terminar!</button>		
	</form>
</div>