@extends('layout.layout')

@section('contenido')

	<form method="POST" action="autenticar" class="form-horizontal">
		
		<label for="usuario">Usuario
			<input type="text" name="usuario"></label>

		<label for="password">Contraseña
			<input type="text" name="password"></label>

		<button type="submit" class="btn btn-info">Acceder</button>
		<!--<input type="submit" value="Enviar">-->
	</form>

@stop