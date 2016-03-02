@extends('layouts.back')
	@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">Edición ONG : {{ $ong->name }}</div>
		<div class="panel-body">
			{!!Form::model($ong, ['route'=>['ong.update',$ong->id],'method'=>'PUT'])!!}
				@include('ong.form.ong')
				{!!Form::submit('Modificar',['class'=>'btn btn-primary'])!!}
			{!!Form::close()!!}

			{!!Form::open(['route'=>['ong.destroy',$ong->id],'method'=>'DELETE'])!!}
				{!!Form::submit('Eliminar',['class'=>'btn btn-warning'])!!}
			{!!Form::close()!!}
		</div>
	</div>	
	@stop	

