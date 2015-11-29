<!DOCTYPE html>
<html>
<head>
<!-- meta tags -->
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <meta name="description"
          content="Mike Wright's resume"/>

<!-- title and ascii -->

    <title>Mike Wright</title>
    @include('parts.ascii')


<!-- stylesheets -->
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
    <script src="/js/app.js"></script>

<!-- page specific scripts -->
@yield('scripts')

</body>
</html>