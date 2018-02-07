@extends('layout.layout')

@section('contenido')

	<form method="POST" action="{{ route('rol.update', $rol->id_rol) }}">
	{!! method_field('PUT') !!}
	{!! csrf_field() !!}

		<div class="form-group">
			<label>Rol
				<input type="text" name="rol" value="{{ $rol->rol }}">
			</label>
		</div>

		<div class="form-group">
			<label>Nombre
				<input type="text" name="nombre" value="{{ $rol->nombre }}">
			</label>
		</div>

		<!--<div class="form-group">
			<label>Estado
				<select name="estado">
					@if($rol->estado == 'A')
						<option value="A" selected="">Activo</option>
						<option value="I">Inactivo</option>
					@else
						<option value="A">Activo</option>
						<option value="I" selected="">Inactivo</option>
					@endif
				</select>
			</label>
		</div>-->

		<button type="submit" class="btn btn-success">Guardar</button>
		

	</form>
	<a href="{{url('rol')}}"><button class="btn btn-info">Cancelar</button></a>

@stop