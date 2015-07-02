@extends('index')

@section('contenido')
<div class="caption tope-tabla">Horario</div>	
<div id="table">
	<div class="header-row row">
    <span class="cell primary">Materia</span>
    <span class="cell">Maestro</span>
     <span class="cell">Grupo</span>
    <span class="cell">Hora</span>
    <span class="cell">PDF's</span>
  </div>

  	@foreach($grupos as $grupo)
	  <div class="row">
		<input type="radio" name="expand">
	    <span class="cell primary" data-label="Materia">{{$grupo->nombre}}</span>
	    <span class="cell" data-label="Maestro">{{$grupo->nombres}} {{$grupo->apellidos}}</span>
	     <span class="cell" data-label="Grupo">{{$grupo->id}}</span>
	     <span class="cell" data-label="Hora">{{$grupo->horario}}</span>
	     <span class="cell" data-label="PDF's"><a href="http://localhost:8000/pdf/{{$grupo->id}}"><img src="http://localhost:8000/img/pdf.gif"></img></a></span>
	  </div>
	@endforeach
</div>
@stop