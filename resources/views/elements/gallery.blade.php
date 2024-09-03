<div class="w-100 max-lg-50 px-lg-5 pt-5 d-flex flex-column align-items-xxl-end">
    <div class="trip_gallery--main w-100 rounded-2 overflow-hidden position-relative">

        @foreach($gallery as $key => $image)
            <picture>
                <source srcset="{{ $image->link_webp }}" type="image/webp">
                <img src="{{ $image->link_image }}" class="img-fluid @if($loop->index > 0) d-none @endif" data-main-images data-position-main-galery="{{ $key }}"/>
            </picture>
        @endforeach

        <div class="position-absolute top-50 p-2 bg-dark rounded-2 ms-2 pointer">
            <picture>
                <source srcset="/files/icons/arrow.webp" type="image/webp">
                <img src="/files/icons/arrow.png" width="30" height="30" class="btn-prev"/>
            </picture>
        </div>

        <div class="position-absolute top-50 p-2 bg-dark rounded-2 end-0 me-2 pointer">
            <picture>
                <source srcset="/files/icons/arrow.webp" type="image/webp">
                <img src="/files/icons/arrow.png" width="30" height="30" class="btn-next"/>
            </picture>
        </div>

    </div>

    <div class="my-2 d-flex overflow-hidden flex-wrap justify-content-evenly card-mini__container">
        @foreach($gallery as $key => $image)
            <div class="overflow-hidden rounded-3 mx-1 mb-2 card-mini">
                <picture>
                    <source srcset="{{ $image->link_webp }}" type="image/webp">
                    <img src="{{ $image->link_image }}" class="pointer border-grayLight-1" data-position-mini-galery="{{ $key }}" width="120" height="100"/>
                </picture>
            </div>
        @endforeach

    </div>
</div>
