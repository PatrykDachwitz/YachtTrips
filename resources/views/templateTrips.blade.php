@extends('pages')


@section('content')

    <div class="d-flex flex-column flex-lg-row justify-content-lg-center" style="margin-top: 125px">
        <div style="max-width: 1900px">
            <div class="d-flex flex-column flex-lg-row justify-content-lg-center">

                <div class="flex-50 d-flex align-items-center justify-content-start p-5 p-lg-0 justify-content-lg-end">
                    <div class="w-75 ms-5 ms-lg-0 me-lg-5">
                        <h4 class="fs-3 mb-4 pt-3"><strong>@lang('templatesTrip.heading.travel')</strong></h4>
                        <p class="fs-5">@lang('templatesTrip.content.travel')</p>
                    </div>
                </div>

                <div class="flex-50 d-flex overflow-hidden align-items-center justify-content-center">
                    <picture>
                        <source srcset="/files/templates/sekcja_1.webp" type="image/webp">
                        <img class="img-fluid" src="/files/templates/sekcja_1.jpg" class="img-fluid" width="950" height="500"/>
                    </picture>
                </div>
            </div>

            <div class="d-flex flex-column justify-content-lg-center flex-lg-row-reverse">

                <div class="flex-50 d-flex align-items-center justify-content-start p-5 p-lg-0">
                    <div class="w-75 ms-5">
                        <h4 class="fs-3 mb-4 pt-3"><strong>@lang('templatesTrip.heading.yacht')</strong></h4>
                        <p class="fs-5">@lang('templatesTrip.content.yacht')</p>
                    </div>
                </div>

                <div class="flex-50 d-flex overflow-hidden align-items-center justify-content-center">
                    <picture>
                        <source srcset="/files/templates/sekcja_2.webp" type="image/webp">
                        <img class="img-fluid" src="/files/templates/sekcja_2.jpg" width="950" height="600"/>
                    </picture>
                </div>
            </div>

            <div class="d-flex flex-column flex-lg-row justify-content-lg-center">

                <div class="flex-50 d-flex align-items-center justify-content-start p-5 p-lg-0 justify-content-lg-end">
                    <div class="w-75 ms-5 ms-lg-0 me-lg-5">
                        <h4 class="fs-3 mb-4 pt-3"><strong>@lang('templatesTrip.heading.premium')</strong></h4>
                        <p class="fs-5">@lang('templatesTrip.content.premium')</p>
                    </div>
                </div>

                <div class="flex-50 d-flex overflow-hidden align-items-center justify-content-center">
                    <picture>
                        <source srcset="/files/templates/sekcja_3.webp" type="image/webp">
                        <img class="img-fluid" src="/files/templates/sekcja_3.jpg" width="950" height="500"/>
                    </picture>
                </div>
            </div>

        </div>

    </div>

    <div class="bg-gray d-flex flex-column flex-lg-row justify-content-lg-center py-lg-5 border-grayLight-1">
        <div style="max-width: 1900px">

            <div class="d-none d-lg-flex flex-column align-items-center">
                <h3 class="text-center fs-2"><strong>@lang('templatesTrip.heading.attraction')</strong></h3>
                <p class="text-center w-75 my-2 fs-4">@lang('templatesTrip.content.attraction')</p>
            </div>

            <div class="d-flex flex-column flex-lg-row justify-content-lg-center mt-4">

                <div class="flex-50 d-flex align-items-center justify-content-start p-5 p-lg-0 justify-content-lg-end">
                    <div class="w-75 ms-5 ms-lg-0 me-lg-5">
                        <h4 class="fs-3 mb-4 pt-3"><strong>@lang('templatesTrip.heading.culinaryWorkshops')</strong></h4>
                        <p class="fs-5">@lang('templatesTrip.content.culinaryWorkshops')</p>
                    </div>
                </div>

                <div class="flex-50 d-flex overflow-hidden align-items-center justify-content-center">
                    <picture>
                        <source srcset="/files/templates/sekcja_4.webp" type="image/webp">
                        <img class="img-fluid" src="/files/templates/sekcja_4.jpg" width="950" height="600"/>
                    </picture>
                </div>
            </div>

            <div class="d-flex flex-column justify-content-lg-center flex-lg-row-reverse">

                <div class="flex-50 d-flex align-items-center justify-content-start p-5 p-lg-0">
                    <div class="w-75 ms-5">
                        <h4 class="fs-3 mb-4 pt-3"><strong>@lang('templatesTrip.heading.diving')</strong></h4>
                        <p class="fs-5">@lang('templatesTrip.content.diving')</p>
                    </div>
                </div>

                <div class="flex-50 d-flex overflow-hidden align-items-center justify-content-center">
                    <picture>
                        <source srcset="/files/templates/sekcja_5.webp" type="image/webp">
                        <img class="img-fluid" src="/files/templates/sekcja_5.jpg" width="950" height="600"/>
                    </picture>
                </div>
            </div>

            <div class="d-flex flex-column flex-lg-row justify-content-lg-center">

                <div class="flex-50 d-flex align-items-center justify-content-start p-5 p-lg-0 justify-content-lg-end">
                    <div class="w-75 ms-5 ms-lg-0 me-lg-5">
                        <h4 class="fs-3 mb-4 pt-3"><strong>@lang('templatesTrip.heading.joga')</strong></h4>
                        <p class="fs-5">@lang('templatesTrip.content.joga')</p>
                    </div>
                </div>

                <div class="flex-50 d-flex overflow-hidden align-items-center justify-content-center">
                    <picture>
                        <source srcset="/files/templates/sekcja_6.webp" type="image/webp">
                        <img class="img-fluid" src="/files/templates/sekcja_6.jpg" width="950" height="600"/>
                    </picture>
                </div>
            </div>

            <div class="d-flex flex-column justify-content-lg-center flex-lg-row-reverse">

                <div class="flex-50 d-flex align-items-center justify-content-start p-5 p-lg-0">
                    <div class="w-75 ms-5">
                        <h4 class="fs-3 mb-4 pt-3"><strong>@lang('templatesTrip.heading.party')</strong></h4>
                        <p class="fs-5">@lang('templatesTrip.content.party')</p>
                    </div>
                </div>

                <div class="flex-50 d-flex overflow-hidden align-items-center justify-content-center">
                    <picture>
                        <source srcset="/files/templates/sekcja_7.webp" type="image/webp">
                        <img class="img-fluid" src="/files/templates/sekcja_7.jpg" width="950" height="600"/>
                    </picture>
                </div>
            </div>

            <div class="d-flex flex-column flex-lg-row justify-content-lg-center">

                <div class="flex-50 d-flex align-items-center justify-content-start p-5 p-lg-0 justify-content-lg-end">
                    <div class="w-75 ms-5 ms-lg-0 me-lg-5">
                        <h4 class="fs-3 mb-4 pt-3"><strong>@lang('templatesTrip.heading.spa')</strong></h4>
                        <p class="fs-5">@lang('templatesTrip.content.spa')</p>
                    </div>
                </div>

                <div class="flex-50 d-flex overflow-hidden align-items-center justify-content-center">
                    <picture>
                        <source srcset="/files/templates/sekcja_8.webp" type="image/webp">
                        <img class="img-fluid" src="/files/templates/sekcja_8.jpg" width="950" height="600"/>
                    </picture>
                </div>
            </div>
        </div>
    </div>

@endsection
