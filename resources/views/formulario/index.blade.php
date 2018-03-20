@extends('layout.layout')

@section('contenido')

	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>Formulario</th>
				<th>Nombre</th>
				<th>Módulo</th>
				<th>Tipo</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			<a href="{{ route('formulario.create') }}">
				<button class="btn btn-success">Nuevo</button>
			</a>
			@foreach($formularios as $formulario)
				<tr>
					<td>{{$formulario->formulario}}</td>
					<td>{{$formulario->nombre_formulario}}</td>
					<td>{{$formulario->modulo->nombre_modulo}}</td>
					<td>{{$formulario->tipo}}</td>
					<td>
						<a href="{{url('/formulario/'.$formulario->id_formulario.'/edit')}}"><button class="btn btn-warning btn-sm">
							<span class="glyphicon glyphicon-edit"></span> Editar</button></a>
						<form style="display: inline" method="POST" action="{{ route('formulario.destroy', $formulario->id_formulario) }}">
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