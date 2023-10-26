<div class="d-flex justify-content-center banner">
    <div class="banner-container position-relative">
        <picture>
            <source srcset="http://127.0.0.1/mobile-banner1.jpg" media="(max-width: 767px)" width="767" height="800"/>
            <img src="http://127.0.0.1/banner1.jpg" width="1920" height="800" />
        </picture>
        <div class="banner-text position-absolute z-5 text-danger top-0 ms-5 d-flex flex-column justify-content-center">
            <h2 class="fs-1">{{ $content->banners[0]->name }}</h2>
            <div>
                {!! $content->banners[0]->descriptions !!}
            </div>
        </div>
    </div>
</div>
