@extends('layout.layout')

@section('contenido')

	<form method="POST" action="{{ route('formulario.update', $formulario->id_formulario) }}">
	{!! method_field('PUT') !!}
	{!! csrf_field() !!}

		<div class="form-group">
			<label>formulario
				<input type="text" name="formulario" value="{{ $formulario->formulario }}">
			</label>
		</div>

		<div class="form-group">
			<label>Nombre
				<input type="text" name="nombre_formulario" value="{{ $formulario->nombre_formulario }}">
			</label>
		</div>

		<div class="form-group">
			<label>Modulo
				<select name="id_modulo">

					@foreach($modulos as $modulo)
						@if($modulo->id_modulo == $formulario->id_modulo)
							<option value="{{$modulo->id_modulo}}" selected>{{$modulo->nombre_modulo}}</option>
						@else
							<option value="{{$modulo->id_modulo}}">{{$modulo->nombre_modulo}}</option>
						@endif	
					@endforeach

				</select>
			</label>
		</div>

		<div class="form-group">
			<label>Tipo
				<input type="text" name="tipo" value="{{ $formulario->tipo }}">
			</label>
		</div>

		<button type="submit" class="btn btn-success">Guardar</button>
		

	</form>
	<a href="{{url('formulario')}}"><button class="btn btn-info">Cancelar</button></a>

@stop