@extends('layout.main')

@section('title', 'Create New Post')

@section('content')
    <h2>Create a new contribution</h2>

    {!! Form::open(['route' => 'posts.store', 'files'=>true, 'method'=>'POST']) !!}
    <p class="form-group">
        {!! Form::label('body') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    </p>
    <p>
        {!! Form::label('post_image') !!}
        {!! Form::file('post_image') !!}
    </p>
    {!! Form::submit('Save', ['class' => 'btn btn-default']) !!}
    {!! Form::close() !!}
@endsection