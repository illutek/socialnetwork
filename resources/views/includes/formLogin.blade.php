{{----}}

{!! Form::open(['route' => 'loginform']) !!}

<div class="form-group">
    {!! Form::label('email', ' ') !!}
    {!! Form::email('email', 'Email', ['class' => 'form-control']) !!}
</div>
<div class="row">
    <div class="col-md-6 form-group">
        {!! Form::label('password', ' ') !!}
        {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) !!}
    </div>
    <div class="col-md-6 margintop-25">
        {!! Form::submit('Login', ['class' => 'btn btn-primary btn-block']) !!}
    </div>
</div>
{!! Form::close() !!}