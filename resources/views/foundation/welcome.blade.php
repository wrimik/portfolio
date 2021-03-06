@extends('templates.site')
@section('scripts')
    <script>
        var App = new Vue({
            el: '#app',
            data:{},
            methods:{
                convert: function($event){
                    alert('Kinda like that.');
                }
            }
        });
    </script>
@stop
@section('content')
    <div class="jumbotron case text-center">
        <h1>Let's Make<br/>Awesome Stuff</h1>
        {{--<h1>Let&rsquo;s Build <br/> Something Amazing</h1>--}}

        <a href="/contact" class="button round info white">HIRE THIS GUY</a>
    </div>
<section>
    <div class="container">
        <div class="row">
            <article>
                <h2>At A Glance</h2>

                <p>
                    I have been leading software and marketing teams since 2008 and
                    building websites since 2006. I rather enjoy it. I have been
                    fortunate enough to work with some exceptionally talented people
                    who have helped me produce some pretty great software.
                </p>

                <p>
                    My skill set includes full-stack web development, leading creative teams,
                    database architecture, corporate level technical strategy (making things jive),
                    and I have a background in design.
                </p>

                <p>
                    I'm not in a rush to leave my current position, however, when I find the right
                    opportunity in San Diego, I'll be moving down there from Orange County.
                </p>

            </article>
        </div>
    </div>
</section>

    @include('parts.lead-in', [
        'btns' => [
            ['url'=>'/history', 'text' => 'WORK HISTORY'],
            ['url'=>'/contact', 'text' => 'GET IN TOUCH']
        ]
    ])
@stop

