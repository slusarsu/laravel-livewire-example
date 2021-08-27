<div>
    <div class="btn-group my-3">
        <button wire:click="slidePrev" class="btn btn-primary active" aria-current="page">Prev</button>
        <button wire:click="slideNext" class="btn btn-primary">Next</button>
    </div>

    <div class="my-3">
        @if($slide == 1)
            <p class="text-center" >
                <img src="{{asset('img/llbanner.jpg')}}" alt="">
            </p>
        @elseif($slide == 2)
            <div class="row">
                <div class="col-6 text-center"><img src="{{asset('img/laravel-livewire.png')}}" width="500px"></div>
                <div class="col-6">
                    <h3 class="my-3">How the he*k does this work?</h3>
                    <p>- Livewire renders the initial component output with the page (like a Blade include). This way, it's SEO friendly.</p>
                    <p>- When an interaction occurs, Livewire makes an AJAX request to the server with the updated data.</p>
                    <p>- The server re-renders the component and responds with the new HTML.</p>
                    <p>- Livewire then intelligently mutates DOM according to the things that changed.</p>
                </div>
            </div>
        @elseif($slide == 3)
            <p class="text-center" >
                <img src="{{asset('img/livewire-start.png')}}" alt="" width="600">
            </p>
        @elseif($slide == 4)
            <p class="text-center" >
                <img src="{{asset('img/livewire-include.png')}}" alt="" width="850">
            </p>
        @elseif($slide == 5)
            <div class="text-center">
                <img src="{{asset('img/screencast-head.png')}}" alt="" width="600">
                <p style="font-size: 32px">It's not like anything you've seen before. The best way to understand it is to just look at the code. Strap on your snorkel, we're diving in.</p>
            </div>
        @endif
    </div>

</div>
