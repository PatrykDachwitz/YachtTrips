<div class="bg-gray d-flex flex-column pt-4">

    @if(!empty($content->name))
        <h2 class="text-center"><strong>{{ $content->name }}</strong></h2>
    @endif

    @if(!empty($content->description))
        <div class="d-none d-xl-flex justify-content-center">
            <p class="fs-4 w-50 text-center">
                {{ $content->description }}
            </p>
        </div>
    @endempty

    <div class="d-flex flex-column flex-xl-row-reverse">

        @foreach($content->banners ?? [] as $banner)
            <div class="d-flex justify-content-center w-xl-50 p-4 align-items-center @if($loop->index !== 0) d-none @endif" data-category-banner="sliders" data-img-id="{{ $banner->id }}">
                @foreach($banner->images ?? [] as $image)
                    @switch($image->pivot->device)
                        @case('mobile')
                            <source media="(max-width: 1200px)" srcset='{{ "{$image->path}/{$image->name}.webp" }}' type="image/webp" width="700" height="445"/>
                            <source media="(max-width: 1200px)" srcset='{{ "{$image->path}/{$image->name}.{$image->extension}" }}' width="700" height="445"/>
                            @break
                        @case('pc')
                            <source srcset='{{ "{$image->path}/{$image->name}.webp" }}' media="(min-width: 1200spx)" type="image/webp"/>
                            <img srcset='{{ "{$image->path}/{$image->name}.{$image->extension}" }}' src='{{ "{$image->path}/{$image->name}.{$image->extension}" }}' class="img-fluid rounded-2 overflow-hidden border-grayLight-1" width="950" height="550" alt="{{ $content->description }}"/>
                            @break
                    @endswitch
                @endforeach
            </div>
        @endforeach

        <div class="d-flex w-xl-50 justify-content-xl-end">
            <div class="d-flex align-items-center">
                <button class="btn btn-dark fs-3 ms-4" data-category-banner="sliders" data-button="back">
                    <strong><</strong>
                </button>
            </div>

            @foreach($content->banners ?? [] as $banner)
                <div class="d-flex flex-column justify-content-center w-xl-75 px-5 @if($loop->index == 1) selected @else d-none @endif" data-category-banner="sliders" data-id="{{ $banner->id }}">
                    <h2 class="fs-2"><b>{{ $banner->name }}</b></h2>
                    <div class="fs-5">
                        {{ $banner->description }}
                    </div>
                </div>
            @endforeach

            <div class="d-flex align-items-center">
                <button class="btn btn-dark fs-3 me-4 me-xl-0" data-category-banner="sliders" data-button="next">
                    <strong>></strong>
                </button>
            </div>
        </div>

    </div>

</div>











