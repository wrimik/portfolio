@extends('templates.site')
@section('content')

    <section class="lost">
        <div class="container">
            <article class="text-center">
                <span style="font-size:30px; color:#494">
                    <i class="fa fa-check"></i> Nope!
                </span>
                <hr/>
                <br/>
                <h1>
                    404 <br/>
                    <small>This page isn't real</small>
                </h1>
                <hr/>
            </article>
        </div>
    </section>

    @include('parts.lead-in', [
        'btns' => [
            ['url'=>'/skills', 'text' => 'SKILLS'],
            ['url'=>'/contact', 'text' => 'GET IN TOUCH']
        ]
    ])
@stop()