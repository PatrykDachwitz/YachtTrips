<div class="w-100 m-0 g-4 row mt-2 mb-5">

    @if(!empty($content->name))
        <h2 class="text-center mt-4 mb-2"><b>{{ $content->name }}</b></h2>
    @endempty

    @if(!empty($content->description))
        <div class="d-none d-lg-flex justify-content-center">
            <p class="fs-4 w-50 text-center">
                {{ $content->description }}
            </p>
        </div>
    @endempty

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

            <div class="d-flex border-grayLight-1 shadow-sm p-3 rounded-2 overflow-hidden h-100 bg-gray">
                <div class="d-flex align-items-center me-3">
                    <picture>
                        <source srcset='{{ "{$banner->images[0]->path}/{$banner->images[0]->name}.webp" }}' type="image/webp"/>
                        <img src='{{ "{$banner->images[0]->path}/{$banner->images[0]->name}.{$banner->images[0]->extension}" }}' width="70" height="70" class="rounded-circle border-grayLight-1"/>
                    </picture>
                </div>
                <div class="d-flex flex-column justify-content-start">
                    <h5 class="fs-5"><b>{{ $banner->name }}</b></h5>
                    <div>
                        {{ $banner->description }}
                    </div>
                    <div>
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
