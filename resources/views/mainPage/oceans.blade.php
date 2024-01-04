<div class="w-100 d-flex justify-content-center my-3">

    <div style="max-width: 1920px">

        @if(!empty($content->name))
            <h2 class="text-center fs-3 mt-4 mb-2"><b>{{ $content->name }}</b></h2>
        @endempty

        @if(!empty($content->description))
            <div class="d-none d-md-flex justify-content-center">
                <p class="fs-5 w-50 text-center">
                    {{ $content->description }}
                </p>
            </div>
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
                    @foreach($content->bannersActive ?? [] as $banner)
                        <div class="ocean m-4 shadow border-grayLight-1

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
                                    <img src='{{ "{$banner->images[0]->path}/{$banner->images[0]->name}.{$banner->images[0]->extension}" }}' width="310" height="221" alt="{{$banner->name}}"/>
                                </picture>
                            </div>

                            <div class="d-flex ocean-content justify-content-between p-2 align-items-center">
                                <strong class="fs-4">
                                    {{ $banner->name }}
                                </strong>
                                <a class="btn fs-6 btn-outline-dark">@lang('pages.check')</a>
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

</div>
