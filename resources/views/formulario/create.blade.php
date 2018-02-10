@extends('layout.layout')

@section('contenido')

	<form method="POST" action="{{ route('formulario.store') }}">
	{!! csrf_field() !!}

		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		<div class="form-group">
			<label>Formulario
				<input type="text" name="formulario" value="{{ old('formulario')}}">
			</label>
		</div>

		<div class="form-group">
			<label>Nombre
				<input type="text" name="nombre_formulario" value="{{ old('nombre_formulario')}}">
			</label>
		</div>

		<div class="form-group">
			<label>Modulo
				<select name="id_modulo">
					@foreach($modulos as $modulo)
						<option value="{{$modulo->id_modulo}}">{{$modulo->nombre_modulo}}</option>
					@endforeach
				</select>
			</label>
		</div>

		<div class="form-group">
			<label>Tipo
				<input type="text" name="tipo" value="{{ old('tipo')}}">
			</label>
		</div>

		<button type="submit" class="btn btn-success">Guardar</button>
		

	</form>
	<a href="{{url('formulario')}}"><button class="btn btn-info">Cancelar</button></a>

@stop