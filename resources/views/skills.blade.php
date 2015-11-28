@extends('templates.site')
@section('scripts')
    <script>
        nav(2);
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
    <section>
        <div id="skills" class="container">
            <div class="row">
                <h2>Stuff I Know</h2>
                <div v-for="skill in skills" class="text-center skill">
                    <img v-bind:src="svg(skill)" />
                    <br/>
                    @{{ skill }}
                </div>
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

