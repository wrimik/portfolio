@extends('templates.site')
@section('content')

    <section>
        <div class="container">
            <div class="row">
                <h2>Contact</h2>
                <div class="small-5 columns">
                    By Email: <br/>
                    <a href="mailto:mike@mike-wright.com">mike@mike-wright.com</a> <hr/>
                    By Phone: <br/>
                    949.910.7277
                </div>
                <div class="small-6 small-offset-1 columns">
                <form action="">
                    <div>
                        <label for="">Name</label>
                        <input type="text"/>
                    </div>
                    <div>
                        <label for="">Email</label>
                        <input type="text"/>
                    </div>
                    <div>
                        <label for="">Phone</label>
                        <input type="text"/>
                    </div>
                    <div>
                        <label for="">Message</label>
                        <textarea ></textarea>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </section>
@stop
