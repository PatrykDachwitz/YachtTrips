<div class="w-100">
    <h2 class="text-center mt-4 mb-2"><b>Nasze najpopularniejsze Wycieczki na Oceanie</b></h2>
    <div class="d-flex flex-wrap justify-content-center align-items-center">

        <div class="cart-oceans-container">
            <div class="d-flex d-xxxxl-none align-items-center">
                <div>
                    <button class="btn btn-dark border-2 fs-2">
                        <
                    </button>
                </div>
            </div>
            @foreach($titles as $key => $title)
                <div class="cart-oceans m-4 shadow @switch($key)
                    @case(2)
                                d-none
                                d-xxxl-flex
                                @break
                    @case(3)
                                d-none
                                d-xl-flex
                                @break
                    @case(4)
                                d-none
                                d-xxxxl-flex
                                @break
                    @case(1)
                                d-none
                                d-lg-flex
                                @break

                   @endswitch">

                    <div>
                        <picture>
                            <img src="http://127.0.0.1/slide1.jpg" width="350" height="250" />
                        </picture>
                    </div>

                    <div class="p-2 d-flex cart-oceans-content flex-column justify-content-between">
                        <p class="fs-5">
                            {{ $title }}
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
