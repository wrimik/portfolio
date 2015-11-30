@extends('templates.site')
@section('scripts')
    <script>
        nav(1);
        VueHistory();
    </script>
@stop
@section('content')

<!--

    OKAY - HEADS UP REALLY QUICK

    So you're going to notice that I include some SVG's below (for the company logos)
    This makes the raw HTML look kinda sorta aweful.

    Just know that in the context of the application itself, the SVG source has been
    removed pretty far from anywhere that a developer might actually end up.

    So while it may look bad here, this is not indicative of how my working source
    code looks.

-->

    <section id="history" class="v-cloak">
        <div class="container">
            <div class="row">
                <h2>Work History</h2>

                <ul class="nav nav-tabs hidden-xs">
                    <li role="presentation"
                        v-for="tab in tabs"
                        v-on:click="set($index)"
                        :class="{'active': active == $index }">
                        <a>@{{ tab }}</a>
                    </li>
                </ul>

                <div :class="{'active': active == 0}" class="tab-content">
                    @include('resume.lojistic')
                    <hr class="visible-xs"/>
                </div>

                <div :class="{'active': active == 1}" class="tab-content">
                    @include('resume.aceapp')
                    <hr class="visible-xs"/>
                </div>

                <div :class="{'active': active == 2}" class="tab-content">
                    @include('resume.hcwi')
                    <hr class="visible-xs"/>
                </div>

                <div :class="{'active': active == 3}" class="tab-content">
                    @include('resume.parkdcs')
                    <hr class="visible-xs"/>
                </div>

                <div :class="{'active': active == 4}" class="tab-content">
                    @include('resume.oxfordsvi')
                </div>

                <div class="container hidden-xs">
                    <div class="col-xs-8 col-xs-offset-2 controls">
                        <div
                                v-on:click="set(active-1)"
                                v-if="active > 0"
                                class="btn btn-md btn-default">
                            PREV
                        </div>
                        <div
                                v-on:click="set(active+1)"
                                v-if="active < 4"
                                class="btn btn-md btn-success pull-right">
                            NEXT
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('parts.lead-in', [
        'btns' => [
            ['url'=>'/skills', 'text' => 'SKILLS'],
            ['url'=>'/contact', 'text' => 'GET IN TOUCH']
        ]
    ])
@stop
