@extends('layout.layout')

@section('contenido')

	<form method="POST" action="{{ route('modulo.update', $modulo->id_modulo) }}">
	{!! method_field('PUT') !!}
	{!! csrf_field() !!}

		<div class="form-group">
			<label>Modulo
				<input type="text" name="modulo" value="{{ $modulo->modulo }}">
			</label>
		</div>

		<div class="form-group">
			<label>Nombre
				<input type="text" name="nombre_modulo" value="{{ $modulo->nombre_modulo }}">
			</label>
		</div>

		<button type="submit" class="btn btn-success">Guardar</button>
		

	</form>
	<a href="{{url('modulo')}}"><button class="btn btn-info">Cancelar</button></a>

@stop