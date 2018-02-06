@extends('layout.layout')

@section('contenido')

	<table class="table">
		<thead>
			<tr>
				<th>Rol</th>
				<th>Nombre</th>
				<th>Estado</th>
			</tr>	
		</thead>
		<tbody>
			@foreach($roles as $rol)
				<tr>
					<td>{{$rol->rol}}</td>
					<td>{{$rol->nombre}}</td>
					<td>{{$rol->estado}}</td>
				</tr>
			@endforeach
		</tbody>
		
	</table>
@stop