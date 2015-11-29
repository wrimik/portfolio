@extends('templates.site')
@section('scripts')
    <script>
        Skills = [
            'php', 'html 5', 'css 3', 'javascript', 'mysql',
            'laravel', 'vuejs', 'jquery', 'sass', 'bootstrap',
            'git', 'emmet', 'illustrator', 'photoshop', 'ubuntu',
            'angular', 'grunt', 'gulp','node','scrum'
        ];
    </script>
    <script src="/js/skills.js"></script>
@stop
@section('content')

    <div class="jumbotron case text-center">
        <h1>√ Skills <br/>
            <span class="strike"><strike>&times; Bills</strike></span>
        </h1>
        <a href="/contact" class="button round info white">HIRE THIS GUY</a>
    </div>
    <section>
        <div id="skills" class="container">
            <div class="row">
                <h2>Stuff I Know</h2>
                <ul class="small-block-grid-3 medium-block-grid-5 skills">
                    <li v-for="skill in skills" class="text-center">
                        <img v-bind:src="svg(skill)" />
                        <br/>
                        @{{ skill }}
                    </li>
                </ul>
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

