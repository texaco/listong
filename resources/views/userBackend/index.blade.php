@extends('layouts.userBack')
@section('content')
<h1>Index de user backend</h1>
	<table class="table table-striped">
		<thead>
			<th>Id</th>
			<th>Nombre</th>
			<th>Email</th>
		</thead>
		@foreach ($users as $user)
			<tbody>
				<td>{{$user->id}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
			</tbody>
		@endforeach
	</table>
	{!! $users->render() !!}
@stop