
    <section class="lead-in">
        <div class="container">
            <div class="row">

                @foreach($btns as $index => $btn)

                <div class="col-sm-6 col-xs-12 @if($index == 0 ) text-right @endif ">
                    <a class="btn btn-lg white" href="{{ $btn['url'] }}">
                        {{ $btn['text'] }}
                    </a>
                    <br/>
                </div>

                @endforeach

            </div>
        </div>
    </section>