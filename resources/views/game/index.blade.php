@extends('layouts.app')

@section('content')
	<div class="panel panel-success">
  		<div class="panel-heading">¿Listo para jugar {{\Auth::user()->name}}?</div>
  		<div class="panel-body">
  			
  		<div class="ajax">
  			<button type="button" class="play form-control col-md-12 btn btn-success input-lg">¡Jugar!</button>
  			
  		</div>

  		</div>
	</div>
@endsection

@section('javascript')

<script type="text/javascript">
	$(document).ready(function () {
		$(document).on('click', '.play', function () {
			$.get("/quiz/create", function(data, status){
        		$('.ajax').html(data);
    		});
		});
	});
</script>
@endsection