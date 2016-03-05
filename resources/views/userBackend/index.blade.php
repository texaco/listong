@extends('layouts.userBack')
@section('content')
<h1>Index de user backend</h1>
	<table class="table table-striped">
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
					<a href="{{ route('ong.edit',$o) }}" class="btn btn-info">Editar</button>
				</td>
			</tbody>
		@endforeach
	</table>
	{!! $ong->render() !!}
@stop