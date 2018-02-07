@extends('layout.layout')

@section('contenido')

	<form method="POST" action="{{ route('rol.store') }}">
	{!! csrf_field() !!}

		<div class="form-group">
			<label>Rol
				<input type="text" class="mayusculas" name="rol" value="{{ old('rol')}}">
			</label>
		</div>

		<div class="form-group">
			<label>Nombre
				<input type="text" name="nombre" value="{{ old('nombre')}}">
			</label>
		</div>

		<!--<div class="form-group">
			<label>Estado
				<select name="estado">
					<option value="A">Activo</option>
					<option value="I">Inactivo</option>
				</select>
			</label>
		</div>-->

		<button type="submit" class="btn btn-success">Guardar</button>
		

	</form>
	<a href="{{url('rol')}}"><button class="btn btn-info">Cancelar</button></a>

@stop