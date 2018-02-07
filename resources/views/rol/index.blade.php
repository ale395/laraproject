@extends('layout.layout')

@section('contenido')

	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>Rol</th>
				<th>Nombre</th>
				<th>Acciones</th>
			</tr>	
		</thead>
		<tbody>
			<a href="{{ route('rol.create') }}">
				<button class="btn btn-success">Nuevo</button>
			</a>
			@foreach($roles as $rol)
				<tr>
					<td>{{$rol->rol}}</td>
					<td>{{$rol->nombre}}</td>
					<td>
						<a href="{{url('/rol/'.$rol->id_rol.'/edit')}}"><button class="btn btn-warning btn-sm">
							<span class="glyphicon glyphicon-edit"></span> Editar</button></a>
						<form style="display: inline" method="POST" action="{{ route('rol.destroy', $rol->id_rol) }}">
							{!! csrf_field() !!}
							{!! method_field('DELETE') !!}
							<button class="btn btn-danger btn-sm">
							<span class="glyphicon glyphicon-trash"></span> Eliminar</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop