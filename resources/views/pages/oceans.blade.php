@extends('pages')

@section('content')
    <div class="d-flex flex-column flex-lg-row justify-content-lg-center" style="margin-top: 125px">
        <div style="max-width: 1900px" class="mb-5">

            <div class="d-flex flex-column align-items-center mb-4">
                <h1 class="fs-1 text-center"><strong>@lang('templatesOceans.heading.namePage')</strong></h1>
                <p class="d-none d-lg-block fs-4 mt-2 text-center w-75">@lang('templatesOceans.content.oceans')</p>
            </div>

            <div class="d-flex flex-column flex-lg-row justify-content-lg-center">

                <div class="flex-50 d-flex align-items-center justify-content-start p-2 p-lg-0 justify-content-lg-end">
                    <div class="w-75 ms-5 ms-lg-0 me-lg-5">
                        <h4 class="fs-3 mb-4 pt-3"><strong>@lang('templatesOceans.heading.pacific')</strong></h4>
                        <div>
                            <h5 class="fs-5"><strong>@lang('templatesOceans.heading.characteristic')</strong></h5>
                            <p class="fs-5">@lang('templatesOceans.content.characteristic.pacific')</p>
                            <h5 class="fs-5"><strong>@lang('templatesOceans.heading.attractions')</strong></h5>
                            <p class="fs-5">@lang('templatesOceans.content.attractions.pacific')</p>
                        </div>
                    </div>
                </div>

                <div class="flex-50 d-flex overflow-hidden align-items-center justify-content-center">
                    <picture>
                        <source srcset="/files/templates/oceans/sekcja_1.webp" type="image/webp">
                        <img class="img-fluid" src="/files/templates/oceans/sekcja_1.jpg" class="img-fluid" width="950" height="500"/>
                    </picture>
                </div>
            </div>

            <div class="d-flex flex-column justify-content-lg-center flex-lg-row-reverse">

                <div class="flex-50 d-flex align-items-center justify-content-start p-5 p-lg-0">
                    <div class="w-75 ms-5">
                        <h4 class="fs-3 mb-4 pt-3"><strong>@lang('templatesOceans.heading.atlantic')</strong></h4>
                        <div>
                            <h5 class="fs-5"><strong>@lang('templatesOceans.heading.characteristic')</strong></h5>
                            <p class="fs-5">@lang('templatesOceans.content.characteristic.atlantic')</p>
                            <h5 class="fs-5"><strong>@lang('templatesOceans.heading.attractions')</strong></h5>
                            <p class="fs-5">@lang('templatesOceans.content.attractions.atlantic')</p>
                        </div>
                    </div>
                </div>

                <div class="flex-50 d-flex overflow-hidden align-items-center justify-content-center">
                    <picture>
                        <source srcset="/files/templates/oceans/sekcja_2.webp" type="image/webp">
                        <img class="img-fluid" src="/files/templates/oceans/sekcja_2.jpg" width="950" height="600"/>
                    </picture>
                </div>
            </div>

            <div class="d-flex flex-column flex-lg-row justify-content-lg-center">

                <div class="flex-50 d-flex align-items-center justify-content-start p-2 p-lg-0 justify-content-lg-end">
                    <div class="w-75 ms-5 ms-lg-0 me-lg-5">
                        <h4 class="fs-3 mb-4 pt-3"><strong>@lang('templatesOceans.heading.indian')</strong></h4>
                        <div>
                            <h5 class="fs-5"><strong>@lang('templatesOceans.heading.characteristic')</strong></h5>
                            <p class="fs-5">@lang('templatesOceans.content.characteristic.indian')</p>
                            <h5 class="fs-5"><strong>@lang('templatesOceans.heading.attractions')</strong></h5>
                            <p class="fs-5">@lang('templatesOceans.content.attractions.indian')</p>
                        </div>
                    </div>
                </div>

                <div class="flex-50 d-flex overflow-hidden align-items-center justify-content-center">
                    <picture>
                        <source srcset="/files/templates/oceans/sekcja_3.webp" type="image/webp">
                        <img class="img-fluid" src="/files/templates/oceans/sekcja_3.jpg" class="img-fluid" width="950" height="500"/>
                    </picture>
                </div>
            </div>

            <div class="d-flex flex-column justify-content-lg-center flex-lg-row-reverse">

                <div class="flex-50 d-flex align-items-center justify-content-start p-5 p-lg-0">
                    <div class="w-75 ms-5">
                        <h4 class="fs-3 mb-4 pt-3"><strong>@lang('templatesOceans.heading.arctic')</strong></h4>
                        <div>
                            <h5 class="fs-5"><strong>@lang('templatesOceans.heading.characteristic')</strong></h5>
                            <p class="fs-5">@lang('templatesOceans.content.characteristic.arctic')</p>
                            <h5 class="fs-5"><strong>@lang('templatesOceans.heading.attractions')</strong></h5>
                            <p class="fs-5">@lang('templatesOceans.content.attractions.arctic')</p>
                        </div>
                    </div>
                </div>

                <div class="flex-50 d-flex overflow-hidden align-items-center justify-content-center">
                    <picture>
                        <source srcset="/files/templates/oceans/sekcja_4.webp" type="image/webp">
                        <img class="img-fluid" src="/files/templates/oceans/sekcja_4.jpg" width="950" height="600"/>
                    </picture>
                </div>
            </div>

            <div class="d-flex flex-column flex-lg-row justify-content-lg-center">

                <div class="flex-50 d-flex align-items-center justify-content-start p-2 p-lg-0 justify-content-lg-end">
                    <div class="w-75 ms-5 ms-lg-0 me-lg-5">
                        <h4 class="fs-3 mb-4 pt-3"><strong>@lang('templatesOceans.heading.antarctic')</strong></h4>
                        <div>
                            <h5 class="fs-5"><strong>@lang('templatesOceans.heading.characteristic')</strong></h5>
                            <p class="fs-5">@lang('templatesOceans.content.characteristic.antarctic')</p>
                            <h5 class="fs-5"><strong>@lang('templatesOceans.heading.attractions')</strong></h5>
                            <p class="fs-5">@lang('templatesOceans.content.attractions.antarctic')</p>
                        </div>
                    </div>
                </div>

                <div class="flex-50 d-flex overflow-hidden align-items-center justify-content-center">
                    <picture>
                        <source srcset="/files/templates/oceans/sekcja_5.webp" type="image/webp">
                        <img class="img-fluid" src="/files/templates/oceans/sekcja_5.jpg" class="img-fluid" width="950" height="500"/>
                    </picture>
                </div>
            </div>

        </div>
    </div>
@endsection
