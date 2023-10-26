<div class="w-100 m-0 g-4 row mt-2 mb-5">
    @if(!empty($content->description))
        <h2 class="w-100 text-center"><b>{{ $content->description }}</b></h2>
    @endif


    @foreach($content->banners ?? [] as $banner)

        <div class="col-12 col-lg-6 col-xxl-4
            @if(in_array($loop->index, [
                2,
                3
            ]))
                d-none
                d-lg-block
            @elseif(in_array($loop->index, [
                4,
                5
            ]))
                d-none
                d-xxl-block
            @endif
            ">
            <div class="p-3 d-flex align-items-center flex-wrap bg-gray border-1 rounded-3 shadow">
                <div class="pe-4">
                    <picture>
                        <img src="http://127.0.0.1/slide12.jpg" width="70" height="70" class="rounded-circle"/>
                    </picture>
                </div>
                <div class="d-flex flex-column justify-content-between">
                    <h3 class="fs-5"><b>{{ $banner->name }}</b></h3>
                    <p class="m-0 p-0 fs-6">{{ $banner->descriptions }}</p>
                    <div class="starsContainer d-flex align-items-center justify-content-start">
                        @for($i = 0; $i < 5; $i++)
                            <img src="https://static.vecteezy.com/system/resources/previews/009/342/559/non_2x/mobile-game-golden-star-clipart-design-illustration-free-png.png" width="20" height="20"/>
                        @endfor
                        <span class="fs-5 pt-1">5/5</span>
                    </div>
                </div>
            </div>
        </div>

    @endforeach


</div>
