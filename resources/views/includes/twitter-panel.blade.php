<div class="panel panel-default">
    <div class="panel-body panel-twitter__body">
        {{--{{ Auth::user()->twitter or 'formvalidation' }}--}}
        <a class="twitter-timeline" data-height="300" data-theme="dark"
           href="https://twitter.com/{{ Auth::user()->twitter }}">Tweets by
            TwitterDev</a>
        <script async src="//platform.twitter.com/widgets.js"
                charset="utf-8"></script>
    </div>
</div>