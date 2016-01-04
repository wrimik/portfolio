@extends('templates.site')
@section('scripts')
    <script> nav(0); </script>
@stop
@section('content')

    <div class="jumbotron case text-center">
        <h1>Let's Make<br/>Awesome Stuff</h1>
        <a href="/contact" class="btn btn-lg white">HIRE THIS GUY</a>
    </div>

    <section>
        <div class="container">
            <article>
                <h2>At A Glance</h2>

                <p>
                    I have been leading software and marketing teams since 2008 and
                    building websites since 2006. I rather enjoy it. I have been
                    fortunate enough to work with some exceptionally talented people
                    who have helped me produce some pretty great software.
                </p>

                <p>
                    My skill set includes full-stack web development, leading
                    creative teams, building multi-tenant applications,
                    database architecture, corporate level technical
                    strategy (making things jive), and I have a background in design.
                </p>

            </article>
        </div>
    </section>

    @include('parts.lead-in', [
        'btns' => [
            ['url'=>'/portfolio', 'text' => 'PORTFOLIO'],
            ['url'=>'/contact', 'text' => 'GET IN TOUCH']
        ]
    ])
@stop

