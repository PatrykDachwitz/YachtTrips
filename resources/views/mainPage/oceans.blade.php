<div class="w-100">

    @if(!empty($content->description))
        <h2 class="text-center mt-4 mb-2"><b>{{ $content->description }}</b></h2>
    @endempty

    <div class="d-flex flex-wrap justify-content-center align-items-center">

        <div class="oceans" >

            <div class="d-flex align-items-center">
                <div>
                    <button class="btn btn-dark border-2 fs-2" data-button-previous="oceans">
                        <
                    </button>
                </div>
            </div>
            <div class="d-flex" data-slider-container="oceans">
            @foreach($content->banners ?? [] as $banner)
                <div class="ocean m-4 shadow

                    @switch($loop->index)

                        @case(0)
                            d-flex
                            @break
                        @case(1)
                            d-none
                            d-lg-flex
                            @break
                        @case(2)
                            d-none
                            d-xxxl-flex
                            @break
                        @case(3)
                            d-none
                            d-xxxl-flex
                            @break
                        @case(4)
                            d-none
                            d-xxxxl-flex
                            @break
                        @default
                            d-none
                            @break
                    @endswitch

                " data-slider="oceans">
                    <!--
                    d-xxxxl-flex
                    d-xxxl-flex
                    d-lg-flex
                    d-lg-flex
                    d-lg-flex
                    -->
                    <div>
                        <picture>
                            <img src="{{ $banner->images[0]->path . '/' . $banner->images[0]->name . '.' . $banner->images[0]->extension }}" width="350" height="250" />
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
            </div>

            <div class="d-flex align-items-center">
                <div>
                    <button class="btn btn-dark border-2 fs-2" data-button-next="oceans">
                        >
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
