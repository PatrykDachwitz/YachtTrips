<div class="d-flex justify-content-center banner">
    <div class="banner-container position-relative overflow-hidden">
        <picture>
            @foreach($content->banners[0]->images as $image)
                @switch($image->pivot->device)
                    @case("tablet")
                    <source srcset='{{ "{$image->path}/{$image->name}.webp" }}' media="(max-width: 1450px)" width="1450" height="800" type="image/webp"/>
                        <source srcset='{{ "{$image->path}/{$image->name}.{$image->extension}" }}' media="(max-width: 1450px)" width="1450" height="800" type="{{ $image->mime }}"/>
                        @break
                    @case('mobile')
                        <source media="(max-width: 767px)" srcset='{{ "{$image->path}/{$image->name}.webp" }}' type="image/webp" width="767" height="800"/>
                        <source media="(max-width: 767px)" srcset='{{ "{$image->path}/{$image->name}.{$image->extension}" }}' width="767" height="800"/>
                        @break
                    @case('pc')
                        <source srcset='{{ "{$image->path}/{$image->name}.webp" }}' media="(min-width: 1451px)" type="image/webp"/>
                        <img srcset='{{ "{$image->path}/{$image->name}.{$image->extension}" }}' src='{{ "{$image->path}/{$image->name}.{$image->extension}" }}'  class="w-100" width="1920" height="800" alt="{{ $image->name }}"/>
                        @break
                @endswitch
            @endforeach
        </picture>
        <div class="banner-text position-absolute z-5 text-white top-0 d-flex flex-column justify-content-end justify-content-md-center align-items-md-start mb-2 mb-md-0 ms-md-5">
            <h2 class="fs-1">{{ $content->banners[0]->name }}</h2>
            <div class="fs-5 d-md-flex flex-md-column align-md-items-center w-75 text-center text-md-start mb-4 mb-md-0">
                {!! $content->banners[0]->description !!}
            </div>
        </div>
    </div>
</div>
