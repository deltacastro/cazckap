@extends('layouts.app')

@section('content')

<h2 align="center">¿Como Separar la basura?</h2>
<h3 align="center">¿Para que separar residuos?</h3>
<img class="center" src="{{ asset('/images/general/contenedores-reciclaje.jpg') }}">
<div class="col-md-8 col-md-offset-2">
<p>
	La separación de los residuos en orgánico e inorgánico trae consigo los
	siguientes beneficios:
	<ul>
		<li>Incrementa el acopio de desperdicios reciclables, al facilitar la tarea de selección de los residuos inorgánicos.</li>
		<li>
			Abre la posibilidad de producir composta para fertilizar los suelos de parques y jardines en la ciudad y
			sustituir tierra fértil que actualmente se extrae de suelos de los alrededores de la ciudad, actividad
			sumamente perjudicial para las áreas boscosas que aún se conservan.
		</li>
		<li>
			Dignifica el trabajo y disminuye los riesgos a la salud del personal que labora en las plantas de
			selección, pues la selección se realiza sobre residuos más limpios e inodoros.
		</li>
	</ul>
</p>
<h3>¿Sabes cómo separar los residuos?</h3>
<h4>Residuos orgánicos</h4>
<p>
	<ul>
		<li>Se identifican con el color verde</li>
		<li>
			Son los residuos sólidos biodegradables, es decir, que se descomponen gracias a la acción de
			microorganismos, y con ellos se puede elaborar composta.
		</li>
	</ul>
	<h5>Ejemplos:</h5>
	cáscaras de frutas y verduras, sobrantes de comida, café o té, residuos de jardinería,
	cascarones de huevo, cabello, etc.
</p>
</div>

@endsection