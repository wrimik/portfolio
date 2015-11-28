@extends('templates.site')
@section('scripts')
    <script src="/js/history.js"></script>
    <script>nav(1);</script>
@stop
@section('content')
    <section id="history">
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
                    <hr class="visible-xs"/>
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
