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
                <div class="col-md-12 panel-profile">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                @if(!auth()->check())
                                    <div class="col-md-12">
                                        <h3>Create an account</h3>
                                        <a href="{{ route('register.get') }}">Register</a>
                                        <h3>Login</h3>
                                        <a href="{{ route('login') }}">Login</a>
                                    </div>
                                @else
                                    <div class="col-md-12 panel-profile__avatar">
                                        <img class="avatar-img"
                                             src="{{ asset('uploads/avatars/' . Auth::user()->avatar) }}">
                                    </div>
                                    <div class="col-md-12 panel-profile__global">
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
                                        <div class="profile__global-bio">
                                            <p>{{ Auth::user()->bio }}</p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end panel-profile--}}

                <div class="col-md-12 panel-twitter">
                    @if(auth()->check())
                        <div class="panel panel-default">
                            <div class="panel-body panel-twitter__body">
                                {{--{{ Auth::user()->twitter or 'formvalidation' }}--}}
                                <a class="twitter-timeline" data-height="300" data-theme="dark"
                                   href="https://twitter.com/{{ Auth::user()->twitter }}">Tweets by TwitterDev</a>
                                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                        </div>
                    @endif
                </div>
                {{--end panel-twitter--}}

            </div>

        </div>
    </div>

@endsection