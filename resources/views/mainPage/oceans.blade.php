<div class="w-100">

    @if(!empty($content->description))
        <h2 class="text-center mt-4 mb-2"><b>{{ $content->description }}</b></h2>
    @endempty

    <div class="d-flex flex-wrap justify-content-center align-items-center">
        <div class="oceans">

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

                        <div>
                            <picture>
                                <source srcset='{{ "{$banner->images[0]->path}/{$banner->images[0]->name}.webp" }}' type="image/webp">
                                <img src='{{ "{$banner->images[0]->path}/{$banner->images[0]->name}.{$banner->images[0]->extension}" }}' width="350" height="250" alt="{{$banner->name}}"/>
                            </picture>
                        </div>

                        <div class="d-flex ocean-content justify-content-between p-2 align-items-center">
                            <strong class="fs-4">
                                {{ $banner->name }}
                            </strong>
                            <a class="btn fs-5 btn-dark">@lang('pages.check')</a>
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
