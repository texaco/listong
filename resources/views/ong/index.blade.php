@extends('layouts.front')
@section('content')
	<h1>Index ONG</h1>

	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Email</th>
			<th>Teléfono</th>
		</thead>
		@foreach ($ong as $o)
			<tbody>
				<td>{{$o->name}}</td>
				<td>{{$o->email}}</td>
				<td>{{$o->phone}}</td>
			</tbody>
		@endforeach
	</table>
@stop
