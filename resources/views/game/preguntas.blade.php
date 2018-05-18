<div class="col-md-12">
	<form method="POST" action="{{route('quiz.store')}}">
		{{ csrf_field() }}
		<input type="hidden" name="time" id="inputTime">
		Tiempo: <div class="number2" id="number2"></div>
		@foreach($preguntas as $pregunta)
			<div class="form-group">
				<label>{{$pregunta->pregunta}}</label>
				@foreach($pregunta->respuestas()->inRandomOrder()->get() as $respuesta)
					<div class="radio">
						<label class="quiz"><input class="" type="radio" name="respuesta[{{$pregunta->id}}]" value="{{$respuesta->id}}"> {{$respuesta->respuesta}}</label>
					</div>
				@endforeach
				
			</div>
		@endforeach
		Tiempo: <div class="number2" id="number"></div>
		<button type="submit" class="btn btn-info col-md-12">¡Terminar!</button>		
	</form>
</div>
<script type="text/javascript">
	var n = 0;
	var l = document.getElementById("number");
	var n2 = document.getElementById('number2');
	var it = document.getElementById('inputTime');
	window.setInterval(function(){
	  l.innerHTML = n;
	  n2.innerHTML = n;
	  it.value = n;
	  n++;
	},1000);
</script>