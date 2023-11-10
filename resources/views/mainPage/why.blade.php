<div class="bg-gray d-flex flex-column pt-3 pt-xl-0">

    <div class="d-flex flex-column flex-xl-row">
        <div class="d-flex justify-content-center w-xl-50 p-4 align-items-center">
            <picture>
                @foreach($content->banners[0]->images as $image)
                    @switch($image->pivot->device)
                        {{--                        @case("tablet")--}}
                        {{--                            <source media="(max-width: 1400px)" srcset='{{ "{$image->path}/{$image->name}.webp" }}' width="500" height="265" type="image/webp"/>--}}
                        {{--                            <source media="(max-width: 1400px)" srcset='{{ "{$image->path}/{$image->name}.{$image->extension}" }}' width="500" height="265"/>--}}
                        {{--                            @break--}}
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
            </picture>
        </div>
        <div class="d-flex flex-column w-xl-50 justify-content-xl-center">
            <h2 class="fs-2 d-flex justify-content-center justify-content-xl-start ps-3"><b>{{ $content->banners[0]->name }}</b></h2>
            <div class="p-3 px-4 fs-5">
                {!! $content->banners[0]->description !!}
            </div>
        </div>
    </div>

</div>











