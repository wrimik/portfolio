<!DOCTYPE html>
<html>
<head>
    <title>Mike Wright</title>
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700'
          rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/bower_components/foundation/css/foundation.min.css"/>
    <link rel="stylesheet" href="/bower_components/vue/dist/vue.js"/>
    <link rel="stylesheet" href="/css/app.css"/>
</head>
<body id="app">
<nav>
    <div class="container text-left">
        <div class="row">
            Mike Wright
            <span class="right">
                <a class="button small radius" href="/">HOME</a>
                <a class="button small radius" href="/history">HISTORY</a>
                <a class="button small radius" href="/skills">SKILLS</a>
                <a class="button small radius" href="/contact">CONTACT</a>
            </span>
        </div>
    </div>
</nav>

@yield('content')

<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/vue/dist/vue.js"></script>
<script src="/bower_components/foundation/js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
@yield('scripts')
</body>
</html>