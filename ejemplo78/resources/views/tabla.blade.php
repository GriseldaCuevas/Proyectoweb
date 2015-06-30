@extends('index')

@section('table')
<div class="caption">Horario</div>	
<div id="table">
	<div class="header-row row">
    <span class="cell primary">Materia</span>
    <span class="cell">Maestro</span>
     <span class="cell">Grupo</span>
    <span class="cell">Hora</span>
  </div>

  	@foreach($grupos as $grupo)
	  <div class="row">
		<input type="radio" name="expand">
	    <span class="cell primary" data-label="Materia">Programacion</span>
	    <span class="cell" data-label="Maestro">Carlos Santilla</span>
	     <span class="cell" data-label="Grupo">Centro</span>
	     <span class="cell" data-label="Hora">1-4</span>
	  </div>
	@endforeach
</div>
@stop