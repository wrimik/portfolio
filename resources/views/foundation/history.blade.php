@extends('templates.site')
@section('scripts')
    <script src="/js/history.js"></script>
@stop
@section('content')
    <section id="history">
        <div class="container">
            <div class="row">
                <h2>Work History</h2>
                <div class="tab-buttons">
                    <div
                        v-for="tab in tabs"
                        v-on:click="set($index)"
                        :class="{'secondary': active != $index }"
                        class="button">
                        @{{ tab }}
                    </div>
                </div>

                <div v-if="active == 0" class="tab-content">
                    @include('resume.lojistic')
                </div>
                <div v-if="active == 1" class="tab-content">
                    @include('resume.aceapp')
                </div>
                <div v-if="active == 2" class="tab-content">
                    @include('resume.hcwi')
                </div>
                <div v-if="active == 3" class="tab-content">
                    @include('resume.parkdcs')
                </div>
                <div v-if="active == 4" class="tab-content">

                </div>
                <div
                        v-on:click="set(active-1)"
                        v-if="active > 0"
                        class="button secondary left">
                    PREV
                </div>
                <div
                        v-on:click="set(active+1)"
                        v-if="active < 4"
                        class="button right">
                    NEXT
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
    @include('parts.history-assets')
@stop
