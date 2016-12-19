<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('index') }}"> Social Network</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('index') }}">Home</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        @if(!auth()->check())
                            User <span class="caret"></span>
                        @else
                            <img class="avatar-img" src="{{ asset('uploads/avatars/' . Auth::user()->avatar) }}"
                                 alt="">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        @endif
                    </a>

                    <ul class="dropdown-menu">
                        @if(!auth()->check())
                            <li><a href="{{ route('loginform') }}">Login</a></li>
                            <li><a href="{{ route('register.get') }}">Register</a></li>
                        @else
                            <li><a href="{{ route('profile') }}">Profile</a></li>
                            <li><a href="{{ route('logout') }}">Logout</a></li>
                        @endif
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

