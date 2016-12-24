{{-- --}}

{!! Form::open(['route' => 'posts.store', 'files'=>true, 'method'=>'POST']) !!}
<div class="row">
    <div class="col-md-9 form-group">
        {!! Form::label('body', ' ') !!}
        {!! Form::textarea('body', 'What\'s happening' , ['class' => 'form-control', 'size' => '30x1']) !!}
    </div>
    <div class="col-md-3 form-group group-image-save">
        <div class="row">
            <div class="col-md-6">
                {{--{!! Form::label('post_image', ' ') !!}--}}
                {{--{!! Form::file('post_image', null, 'choose file') !!}--}}

                <div class="image-upload">
                    <label for="post_image">
                        <img src="{{ asset('images/camera-icon.png') }}"/>
                    </label>

                    <input name="post_image" id="post_image" type="file" class="form-control"/>
                </div>
            </div>

            <div class="col-md-6 text-right">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}