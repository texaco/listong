<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-theme.min.css')}}" rel="stylesheet">
</head>
<body>
	<div class="page-header">
        <h3>Back-End</h3>
	</div>
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
			  <a href="{!!URL::to('listing')!!}">Listing ONG</a>
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
        <div class="col-sm-4">
			@yield('content')
        </div>
  	</div>
	

</body>
</html>
