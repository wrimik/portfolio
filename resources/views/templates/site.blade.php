<!DOCTYPE html>
<html>
<head>
<!-- meta tags -->
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <meta name="description"
          content="Mike Wright's Resume"/>
    <meta name="csrf-token"
          content="{{ csrf_token() }}"/>

    <link rel="icon"
          type="image/png"
          href="/images/favicon.ico?"/>
    <link rel="shortcut icon"
          type="image/png"
          href="/images/favicon.ico?"/>

<!-- title and ascii -->

    <title>Mike Wright</title>
    @include('parts.ascii')


<!-- stylesheets -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
          rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700'
          rel='stylesheet'
          type='text/css'/>
    <link href="/bower_components/bootstrap/dist/css/bootstrap.min.css"
          rel='stylesheet'
          type='text/css'/>
    <link href="/css/app.css"
          rel='stylesheet'
          type='text/css'/>
</head>
<body id="app">
    <nav class="navbar">
        <div class="container text-left">
            <a class="navbar-brand" href="/">Mike Wright</a>
            <ul class="nav nav-pills pull-right">
                <li role="presentation"><a href="/">HOME</a></li>
                <li role="presentation"><a href="/portfolio">PORTFOLIO</a></li>
                <li role="presentation"><a href="/history">HISTORY</a></li>
                <li role="presentation"><a href="/skills">SKILLS</a></li>
                <li role="presentation"><a href="/contact">CONTACT</a></li>
            </ul>
        </div>
    </nav>

<!-- end of global header -->
<!-- start of page content-->

@yield('content')

<!-- end of page content-->
<!-- global scripts -->

    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/bower_components/vue/dist/vue.js"></script>
    <script src="/js/all.js"></script>

<!-- page specific scripts -->
@yield('scripts')

    <script>
        /**
         * google analytics
         */
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-70818775-1', 'auto');
        ga('send', 'pageview');

    </script>
</body>
</html>