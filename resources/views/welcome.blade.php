<!DOCTYPE html>
<html>
<head>
    <title>Mike Wright</title>
    <link rel="stylesheet" href="/bower_components/foundation/css/foundation.min.css"/>
</head>
<body>
<nav>
    <div class="container">
        Mike Wright
    </div>
</nav>

<section>
    <div class="container">
        <h2>Stuff I Know</h2>

        @foreach(array_chunk($skills, 5) as $group)
            <div class="row text-center">
                @foreach($group as $index => $skill)
                <div class="small-2 columns
                    @if($index == 0) small-offset-1 @endif
                    @if($index == 4) end @endif
                    ">
                    <img src="http://placehold.it/100x100" alt=""/>
                    <br/>
                    {{ $skill }}
                </div>
                @endforeach
            </div>
         @endforeach
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <h2>Work History</h2>

            <h3>Senior Codemaster @ Lojistic</h3>
            <p>
                As a Senior Codemaster at Lojistic, I lead a creative team of 6 employees and manage
                a several vendors involved in our various projects.
            </p>

            <h4>Projects</h4>
            <h5>Company Website:</h5>
            <p>
                <b>Overview:</b>
                The main focus of the creative team is the company's public website. Every few months
                we shift our goals to bring up any weak points. Some of our goals have included: code
                organization, site speed, search engine position, increasing conversions, integrating
                with our other platforms, and deploying industry leading tools.
            </p>

            <p>
                <b>Code Management:</b>
                This site was migrated to Laravel, Sass, and VueJS in an effort to keep the growing codebase
                organized and manageable. Server side concatination and minification of css and
                javascript files lets us use many files to organize our components, while keeping
                the number of client side requests as low as possible.
            </p>

            <p>
                <b>Site Speed:</b>
                Rather than using several size and color variations of the same images, we use fontforge
                to compile our icons into a single font file. We minify css and javascript files using
                gulp and use Cloudflare to minify html and manage caching.
            </p>

            <p>
                <b>Custom Tracking:</b>
                New features send diagnostic info and notifications through slack to the development team.
                Custom user events are posted to google analytics.
            </p>
            <p>
                <b>Neat Tools:</b>
                Audisee automatically finds recovery opportunities for our clients in about 120 seconds.
                Other companies take at least 2 weeks to do the same.
            </p>

            <p></p>
        </div>
    </div>
</section>


<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/vue/dist/vue.js"></script>
<script src="/bower_components/foundation/js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>
