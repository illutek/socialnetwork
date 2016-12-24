@extends('layout.main')

@section('title', 'Social Home')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-push-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if(auth()->check())
                        @include(('includes.formPostCreate'))
                    @endif

                    <div class="anonymous-content">
                        <h1>Welcome to Social Network</h1>
                        <p>Connect with your friends — and other fascinating people. Get in-the-moment updates on the
                            things that interest you. And watch events unfold, in real time, from every angle.
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-4 col-md-pull-8">
            <div class="row">
                <div class="col-md-12 panel-profile">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                @if(!auth()->check())
                                    <div class="col-md-12">
                                        <h3>New to The Network</h3>
                                        <a href="{{ route('register.get') }}" class="btn btn-warning">Sign Up for Social Network!</a>
                                        <hr>

                                            @include('includes.formLogin')

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
                                            <p>Birthday: {{ date('d M Y',strtotime(Auth::user()->dob))  }}</p>

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