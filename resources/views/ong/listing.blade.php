@extends('layouts.back')
<?php $message=Session::get('message');?>
	@section('content')
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Email</th>
			<th>Teléfono</th>
			<th>Acción</th>
		</thead>
		@foreach ($ong as $o)
			<tbody>
				<td>{{$o->name}}</td>
				<td>{{$o->email}}</td>
				<td>{{$o->phone}}</td>
				<td>
					<button value="{{$o->id}}" class='btn btn-primary'>Editar</button>
					<button value="{{$o->id}}" class='btn btn-warning'>Eliminar</button>
				</td>
			</tbody>
		@endforeach
	</table>
	@stop	

