@extends('templates.site')
@section('scripts')
    <script>
        nav(1);

        $(document).on('click', '.ls-thumbnails img', function () {
            $('.ls-thumbnails .active').removeClass('active');
            $(this).addClass('active');
            $('.image-viewer img').attr('src', $(this).attr('src'));
            $('.image-viewer')[0].scrollTop = 0;
        });
    </script>
@stop
@section('content')

    <!--

        Using VueJS, we define each component and how it interacts with other elements

    -->
    <section>
        <div id="portfolio" class="container">
            <div class="row">
                <h2>
                    Portfolio
                    <br/>
                    <small>(this is a work in progress)</small>
                </h2>

                <div class="project">
                    <div class="col-xs-12 project-title">
                        <h3>
                            Beevio
                        </h3>
                    </div>
                    <div class="screens">

                        <!-- Beevio > Login -->
                        <div class="screen row">
                            <div class="screenshot col-sm-8">
                                <img src="/portfolio-images/2.1.jpg"/>
                            </div>
                            <div class="description col-sm-4">
                                <h4>Login Screen</h4>

                                <p>
                                    A login screen really only needs to do a couple of things.
                                    Establish trust, remove distractions, and not interfere with
                                    the browser's default "remember-me" functionality.
                                </p>
                            </div>
                        </div>

                        <!-- Beevio > Dashboard -->
                        <div class="screen row">
                            <div class="active-screenshot col-sm-8">
                                <img src="/portfolio-images/2.2.jpg"/>
                            </div>
                            <div class="description col-sm-4">
                                <h4>Dashboard</h4>

                                <p>
                                    Beevio's dashboard gives administrative professionals
                                    at pest control companies the ability to effectively
                                    respond to incoming phone calls.
                                </p>

                                <p>
                                    The bar above the map shows each day for a given month, as
                                    well as the number of appointments scheduled for that day.
                                    This helps a call-center rep quickly fill gaps in schedules and
                                    prevent over-booking.
                                </p>

                                <p>
                                    The map displays the location of each appointment for a
                                    given day. Smart companies will group appointments geographically
                                    and by having a top-down view of the location of each in-field technician,
                                    an operator can intelligently define a route or move appointments
                                    from technician to technician.
                                </p>
                            </div>
                        </div>

                        <!-- Beevio > Scheduler -->
                        <div class="screen row">
                            <div class="active-screenshot col-sm-8">
                                <img src="/portfolio-images/2.3.jpg"/>
                            </div>
                            <div class="description col-sm-4">
                                <h4>Scheduler</h4>

                                <p>
                                    Pest companies have multiple employees. One employee
                                    may have one or more routes, and one route may have one or more
                                    employees. Visualizing this was a bit of a challenge.
                                </p>

                                <p>
                                    Beevio's scheduling system is fully responsive, allows for
                                    click &amp; drag appointment editing, and allows you to view
                                    everything on a given day, or a single person's scheduled week.
                                </p>

                                <p>
                                    This tool allows an administrator to quickly reassign single
                                    appointments as well as entire work loads. When one of your
                                    field reps calls in sick, this scheduler saves the day.
                                </p>
                            </div>
                        </div>

                        <!-- Beevio > Scheduler 2 -->
                        <div class="screen row">
                            <div class="active-screenshot col-sm-8">
                                <img src="/portfolio-images/2.4.jpg"/>
                            </div>
                            <div class="description col-sm-4">
                                <h4>Scheduler (2)</h4>

                                <p>
                                    Color coded appointment blocks help you quickly see
                                    which stops have been done. The top-right corner of each
                                    appointment will alert you to things like cancelled contracts
                                    and first visits.
                                </p>

                                <p>
                                    The left and right ends of the page show the hour of the day.
                                    The yellow stripe in this area quickly lets the user know the
                                    current time of day in relation to their appointments.
                                </p>

                                <p>
                                    When field reps use Beevio's mobile site to check-in to appointments,
                                    the system grabs their GPS location. This helps to remove any doubt
                                    about technician performance.
                                </p>
                            </div>
                        </div>


                        <!-- Beevio > Contract -->
                        <div class="screen row">
                            <div class="active-screenshot col-sm-8">
                                <img src="/portfolio-images/2.5.jpg"/>
                            </div>
                            <div class="description col-sm-4">
                                <h4>Contract Maintenance</h4>

                                <p>
                                    Manage multiple contracts, client contact info, notes, and
                                    billing from one page... without being distracted by clutter.
                                </p>

                                <p>
                                    The calendar on the bottom of the page shows an icon for
                                    every appointment, and lets you know if the stop was complete
                                    or missed, and if the invoice is paid or unpaid. When you're
                                    on the phone with a client, you need to be able to quickly get a feel
                                    for the history of an account.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="project">
                    <div class="col-xs-12 project-title">
                        <h3>
                            Lojistic
                            <br/>
                            <small>
                                TIP: Click one of the images on the left
                                and view it on the right. Resize the height
                                on the viewer by dragging the bottom-right corner
                            </small>
                        </h3>
                    </div>
                    <div id="lojistic-screens" class="screens">
                        <div class="col-xs-4 ls-thumbnails">
                            <img src="/portfolio-images/3.1.jpg" class="active"/>
                            <img src="/portfolio-images/3.2.jpg"/>
                            <img src="/portfolio-images/3.3.jpg"/>
                            <img src="/portfolio-images/3.4.jpg"/>
                            <img src="/portfolio-images/3.5.jpg"/>
                        </div>
                        <div class="image-viewer col-xs-8">
                            <img src="/portfolio-images/3.1.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <p>
                                Most pages and features on Lojistic.com were easy to impliment from
                                a technical perspective. The biggest challenge with this project
                                has been keeping the assets (views/stylesheets/scripts/images) from
                                becoming unmanageable.
                            </p>

                            <p>
                                I've maintained a philosophy of creating things that can be
                                re-used in other contexts. Most of the custom design elements
                                are hand built, then turned into a template, and then that
                                template is implemented throughout several pages.
                            </p>

                            <p>
                                This helps both the designers and developers roll out attractive
                                pages quickly and consistently, and it keeps the code base as
                                small as possible.
                            </p>
                            <hr/>
                            <p style="text-align:center">
                                <b>More examples coming soon!</b>
                            </p>
                        </div>
                    </div>
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

