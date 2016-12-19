@extends('layout.main')

@section('title', 'Social Home')

@section('content')
    <div class="row">
        <div class="col-md-9 col-md-push-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1>De home pagina</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aspernatur
                        cupiditate dicta eaque explicabo laudantium, maxime nisi nobis sequi vitae?
                        Architecto aspernatur ea facere natus obcaecati optio ratione repellat,
                        temporibus?
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-md-pull-9">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                @if(!auth()->check())
                                    <ul>
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('register.get') }}">Register</a></li>
                                    </ul>
                                @else
                                    <div class="col-md-12">
                                        <img class="avatar-img"
                                             src="{{ asset('uploads/avatars/' . Auth::user()->avatar) }}">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tr>
                                                    <th>Age</th>
                                                    <th>Username</th>
                                                    <th>Gender</th>
                                                </tr>
                                                <tr>
                                                    <td>{{ Auth::user()->present()->accountAge }}</td>
                                                    <td>{{ Auth::user()->username }}</td>
                                                    <td>{{ Auth::user()->present()->accountGender }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    @if(auth()->check())
                        <div class="panel panel-default">
                            <div class="panel-body panel-twitter">
                                <h3>Tweets by {{ Auth::user()->username }}</h3>
                                <a class="twitter-timeline" data-height="300" data-theme="dark"
                                   href="https://twitter.com/{{ Auth::user()->username }}">Tweets by TwitterDev</a>
                                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                        </div>
                    @else

                    @endif
                </div>


            </div>

        </div>
    </div>

@endsection