@extends('layout.main')

@section('title', 'Create New Post')

@section('content')

    <div class="col-md-8 col-md-offset-2">
        <h2>What's happening</h2>

        {!! Form::open(['route' => 'posts.store', 'files'=>true, 'method'=>'POST']) !!}
        <p class="form-group">
            {!! Form::label('body') !!}
            {!! Form::textarea('body', 'What\'s happening' , ['class' => 'form-control', 'size' => '30x2']) !!}
        </p>
        <p>
            {!! Form::label('post_image', 'Image') !!}
            {!! Form::file('post_image') !!}
        </p>
        {!! Form::submit('Save', ['class' => 'btn btn-primary btn-block']) !!}
        {!! Form::close() !!}
    </div>

@endsection