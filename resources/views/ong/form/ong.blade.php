<div class="form-group">
	{!!Form::label('Nombre:')!!}
	{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Insertar Nombre'])!!}
</div>
<div class="form-group">
	{!!Form::label('Email:')!!}
	{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Insertar Email'])!!}
</div>
<div class="form-group">
	{!!Form::label('Teléfono:')!!}
	{!!Form::text('phone',null,['class'=>'form-control','placeholder'=>'Insertar Teléfono'])!!}
</div>
	{!!Form::hidden('latitud')!!}
	{!!Form::hidden('longitud')!!}