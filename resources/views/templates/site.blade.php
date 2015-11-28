<!DOCTYPE html>
<html>
<head>
    <title>Mike Wright</title>
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700'
          rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/bower_components/vue/dist/vue.js"/>
    <link rel="stylesheet" href="/css/app.css"/>
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

@yield('content')

<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/vue/dist/vue.js"></script>
<script src="/js/app.js"></script>
@yield('scripts')
</body>
</html>