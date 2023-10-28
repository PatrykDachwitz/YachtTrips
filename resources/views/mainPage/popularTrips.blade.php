<div class="w-100">
    @if(!empty($content->description))
        <h2 class="text-center mt-4 mb-2"><b>{{ $content->description }}</b></h2>
    @endif

    <div class="d-flex flex-wrap justify-content-center align-items-center">

        <div class="ocean">

            <div class="d-flex d-xxxxl-none align-items-center">
                <div>
                    <button class="btn btn-dark border-2 fs-2">
                        <
                    </button>
                </div>
            </div>

            @foreach($content->banners as $banner)
                <div class="cart-oceans m-4 shadow

                @if($loop->index == 1)
                    d-none
                    d-lg-flex
                @elseif($loop->index == 2)
                    d-none
                    d-xxxl-flex
                @elseif($loop->index == 3)
                    d-none
                    d-xl-flex
                @elseif($loop->index == 4)
                    d-none
                    d-xxxxl-flex
                @endif

                ">

                    <div>
                        <picture>
                            <img src="http://127.0.0.1/slide1.jpg" width="350" height="250" />
                        </picture>
                    </div>

                    <div class="p-2 d-flex ocean-content flex-column justify-content-between">
                        <p class="fs-5">
                            {{ $banner->name }}
                        </p>
                        <div class="w-100 d-flex justify-content-end">
                            <a class="btn fs-5 btn-dark">Rezerwuj teraz</a>
                        </div>
                    </div>

                </div>
            @endforeach

            <div class="d-flex d-xxxxl-none align-items-center">
                <div>
                    <button class="btn btn-dark border-2 fs-2">
                        >
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
