@extends('layouts.back')
	@section('content')
	{!!Form::open(['route'=>'ong.store','method'=>'POST'])!!}
		@include('ong.form.ong')
		{!!Form::submit('Insertar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	@stop	

