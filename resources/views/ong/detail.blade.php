@extends('layouts.front')
	@section('content')
	<div class="container">
		<div class="panel panel-default">
			<div class="page-header">
	  			<h1>{{ $ong->name }} <small>lema o titulo</small></h1>
			</div>
			<div class="panel panel-primary">
			  	<div class="panel-heading"><h3 class="panel-title">Email</h3></div>
			  	<div class="panel-body">{{ $ong->email }}</div>
			</div>
			<div class="panel panel-primary">
			  	<div class="panel-heading"><h3 class="panel-title">Teléfono</h3></div>
			  	<div class="panel-body">{{ $ong->phone }}</div>
			</div>
			<div class="panel panel-primary">
			  	<div class="panel-heading"><h3 class="panel-title">Localización</h3></div>
			  	<div class="panel-body">{!!$map['html']!!}</div>
			</div>
		</div>	
	</div>
	@stop	

