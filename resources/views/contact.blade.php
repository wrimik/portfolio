@extends('templates.site')
@section('scripts')
    <script>nav(3);</script>
@stop
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <h2>Contact</h2>
                <div class="col-sm-5">
                    By Email: <br/>
                    <a href="mailto:mike@mike-wright.com">mike@mike-wright.com</a> <hr/>
                    By Phone: <br/>
                    949.910.7277
                </div>
                <div class="col-sm-5 col-sm-offset-2">
                <form action="">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input class="form-control" type="text"/>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input class="form-control" type="text"/>
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input class="form-control" type="text"/>
                    </div>
                    <div class="form-group">
                        <label for="">Message</label>
                        <textarea class="form-control" ></textarea>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </section>
@stop
