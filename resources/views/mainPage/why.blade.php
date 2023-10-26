<div class="sliders bg-gray py-5">

    @if(!empty($content->description))
        <h2 class="d-flex w-100 justify-content-center pb-4 d-xxl-none"><b>{{ $content->description }}</b></h2>
    @endif

    <div class="sliders-image m-0 p-0 d-flex justify-content-center align-items-center">
        <div>
            <picture>
                <source srcset="http://127.0.0.1/mobil-slide1.jpg" media="(max-width: 767px)" width="700" height="444" >
                <source srcset="http://127.0.0.1/slide1233.jpg" media="(max-width: 1400px)" width="500" height="263" >
                <img src="http://127.0.0.1/slide1222.jpg" width="950" height="550" class="rounded-4"  />
            </picture>
        </div>
    </div>

    <div class="sliders-content-text m-0 px-5 px-xxl-0 ps-xxl-5 pe-xxl-0 pt-5 pt-xxl-0 d-flex flex-column align-items-end justify-content-center align-items-xxl-start">
        <div class="customSizeTextContainer">
            <h2 class="fs-2 pb-4 d-none d-xxl-block"><b>{{ $content->banners[0]->name }}</b></h2>
            <div>
                {!! $content->banners[0]->descriptions !!}
            </div>
        </div>

    </div>

</div>
