<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-theme.min.css')}}" rel="stylesheet">
    <script type="text/javascript">var centreGot = false;</script>{!!$map['js']!!}
    
</head>
<body>
	<nav class="navbar navbar-default">
        <div class="container-fluid">
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			    <span class="sr-only">Toggle Navigation</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">Listong</a>
		    </div>
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
				        <li><a href="#">Menu1</a></li>
						<li><a href="#">Menu2</a></li>
						<li><a href="{{url('gmaps')}}">Google Maps</a></li>
		                <li><a href="{{route('logout')}}">Salir</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid">
	  	<div class="row">
	        <div class="col-sm-2">
				<div class="panel panel-info">
				<div class="panel-heading">
				  	<h3 class="panel-title">Entity ONG</h3>
				</div>
				<div class="panel-body">
				  <a href="{!!URL::to('/ong/create')!!}">Create ONG</a>
				</div>
				<div class="panel-body">
				  <a href="{!!URL::to('/ong')!!}">Listing ONG</a>
				</div>
				</div>
				<div class="panel panel-info">
				<div class="panel-heading">
				  	<h3 class="panel-title">Entity 2</h3>
				</div>
				<div class="panel-body">
				  Entity Option
				</div>
				</div>
	        </div>
	        <div class="col-sm-10">
				@yield('content')
	        </div>
	  	</div>
	</div>

</body>
</html>
