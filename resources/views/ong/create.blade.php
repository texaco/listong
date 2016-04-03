@extends('layouts.back')
	@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">Nueva ONG</div>
		<div class="panel-body">
		{!!Form::open(['route'=>'ong.store','method'=>'POST'])!!}
			@include('ong.form.ong')
			{!!Form::submit('Insertar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}
		<input type="text" id="myPlaceTextBox" />
		{!!$map['html']!!}
		</div>
	</div>
	@stop	

