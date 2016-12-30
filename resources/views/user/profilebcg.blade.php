@extends('layout.main')

@section('title', 'Profile background')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-body">
                <img class="user-bcg-img" src="{{ asset('uploads/bcg/' . $user->bcg) }}" alt="{{ $user->bcg }}">
                <h2>{{ $user->name }}</h2>
                {!!  Form::open(['route' => 'profilebcg', 'files'=>true]) !!}

                <p class="form-group margintop-25">
                    {!! Form::label('bcg', 'Update your background image') !!}
                    {!! Form::file('bcg', ['class' => '']) !!}
                </p>

                <p class="form-group margintop-45">
                    {!!  Form::submit('Save', ['class' => "btn btn-primary btn-block margin-top"]) !!}
                </p>

                {!!  Form::close() !!}
            </div>
        </div>
    </div>
@endsection