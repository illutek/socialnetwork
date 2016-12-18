@if (count($errors)>0)
    <div class="alert alert-danger">
        <p>The following errors have occured</p>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif