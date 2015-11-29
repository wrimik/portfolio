<section class="lead-in">
    <div class="container">
        <div class="row">
            @foreach($btns as $index => $btn)
            <div class="small-6 columns @if($index == 0 ) text-right @endif ">
                <a class="button round large info white" href="{{ $btn['url'] }}">
                    {{ $btn['text'] }}
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>