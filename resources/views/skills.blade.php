@extends('templates.site')
@section('scripts')
    <script>
        nav(3);
        VueSkills();
    </script>
@stop
@section('content')

<!--

    This list of skills is populated by VueJS (which is basically Angular lite)
    All of the images are SVG's because... well... I felt like it

-->
    <section>
        <div id="skills" class="container"  v-cloak>
            <div class="row">
                <h2>Stuff I Know</h2>
                <div v-for="skill in skills" class="text-center skill">
                    <svg preserveAspectRatio="xMinYMin slice"
                         width="100%" viewBox="0 0 145 131.667">
                        <use v-bind:xlink:href="svg(skill)" ></use>
                    </svg>
                    <br/>
                    @{{ skill }}
                </div>
            </div>
        </div>
    </section>

<!--  import all svg's -->
<div style="width:0;height:0; overflow:hidden;">
    @include('parts.skills-assets.skills')
</div>
    @include('parts.lead-in', [
        'btns' => [
            ['url'=>'/history', 'text' => 'WORK HISTORY'],
            ['url'=>'/contact', 'text' => 'GET IN TOUCH']
        ]
    ])
@stop

