@extends('layout.main')

@section('title', 'Login')

@section('content')
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-body">
                <h2>I have an account</h2>

                {!! Form::open(['route' => 'loginform']) !!}

                <p class="form-group">
                    {!! Form::label('email') !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </p>
                <p class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </p>
                <p class="form-group margintop-45">
                    {!! Form::submit('Submit', ['class' => 'btn btn-primary btn-block']) !!}
                </p>
                {!! Form::close() !!}
            </div>
        </div>
    </div>


@endsection