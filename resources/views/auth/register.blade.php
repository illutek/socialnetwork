@extends('layout.main')

@section('title', 'Registration')

@section('content')
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-body">
                <h2>Create an account</h2>

                @include('includes.errors')

                {!! Form::open(['route' => 'register.get']) !!}
                <p class="form-group">
                    {!! Form::label('username', 'Username') !!}
                    {!! Form::text('username',null, ['class' => 'form-control']) !!}
                </p>
                <p class="form-group">
                    {!! Form::label('twitter', 'Your Twitter username') !!}
                    {!! Form::text('twitter',null, ['class' => 'form-control']) !!}
                </p>
                <p class="form-group">
                    {!! Form::label('dob', 'Date of Birth') !!}
                    {!! Form::date('dob', null, ['class' => 'form-control']) !!}
                </p>
                <p class="form-group">
                    {!! Form::label('name', 'Full name') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </p>
                <p class="form-group">
                    {!! Form::label('email', 'Your email address') !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </p>
                <p class="form-group">
                    {!! Form::label('gender', 'Gender') !!}
                    {!! Form::select('gender', ['Man', 'Female'], null,['class' => 'form-control']) !!}
                </p>
                <p class="form-group">
                    {!! Form::label('bio', 'Bio') !!}
                    {!! Form::textarea('bio', null, ['class' => 'form-control']) !!}
                </p>
                <p class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </p>
                <p class="form-group">
                    {!! Form::label('password_confirmation') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </p>
                <p class="form-group margintop-45">
                    {!! Form::submit('Next', ['class' => 'btn btn-primary btn-block']) !!}
                </p>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection