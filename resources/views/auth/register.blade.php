@extends('layouts.front')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar</div>
 
                <div class="panel-body">
                    {!! Form::open(['route' => 'register', 'class' => 'form']) !!}
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="name" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" name="password">
                        </div>

                        <div class="form-group">
                            <label>Confirmar Contraseña</label>
                            <input type="password" name="password_confirmation">
                        </div>

                        <div class="form-group">
                            <button type="submit">Registrar</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection