@extends('layouts.front')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Entrar</div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'login', 'class' => 'form']) !!}
                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" value="{{ old('email') }}">
                            </div>

                            <div class="form-group">
                                <label>Contraseña</label>
                                <input type="password" name="password" id="password">
                            </div>

                            <div class="form-group">
                                <input type="checkbox" name="remember"> <label>Recordar</label>
                            </div>

                            <div class="form-group">
                                <button type="submit">Entrar</button>
                            </div>
                        {!! Form::close() !!}
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection