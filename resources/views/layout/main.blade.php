<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
</head>

    <body>
    @include('includes.navbar')
    <div class="container">
        @yield('content')
        @include('includes.footer')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    @if(!auth()->check())
        <script>
            $.backstretch([
                "images/people_001.jpg",
                "images/people_002.jpg",
                "images/people_003.jpg",
                "images/people_004.jpg",
                "images/people_005.jpg",
                "images/people_006.jpg"
            ], {
                fade: 750,
                duration: 4000
            });
        </script>
        @else
        <script>
            $.backstretch([
                "{{ 'uploads/bcg/'.  (Auth::user()->bcg) }}"
            ]);
        </script>
    @endif
    </body>
</html>