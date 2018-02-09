@extends('layout.layout')

@section('contenido')

	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>Módulo</th>
				<th>Nombre</th>
				<th>Acciones</th>
			</tr>	
		</thead>
		<tbody>
			<a href="{{ route('modulo.create') }}">
				<button class="btn btn-success">Nuevo</button>
			</a>
			@foreach($modulos as $modulo)
				<tr>
					<td>{{$modulo->modulo}}</td>
					<td>{{$modulo->nombre_modulo}}</td>
					<td>
						<a href="{{url('/modulo/'.$modulo->id_modulo.'/edit')}}"><button class="btn btn-warning btn-sm">
							<span class="glyphicon glyphicon-edit"></span> Editar</button></a>
						<form style="display: inline" method="POST" action="{{ route('modulo.destroy', $modulo->id_modulo) }}">
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