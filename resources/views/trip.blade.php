<!doctype html>
<html lang="en">
<head>
    @include('elements.header')
</head>
<body>
<div class="container-fluid d-flex flex-column m-0 p-0 overflow-hidden">
    @include('elements.loadingPage')
    @include('elements.menu')
    <div class="container product d-flex flex-column flex-lg-row product-main-container" id="app" style="margin-top: 60px !important;min-width: 100% !important;">


    </div>
    <div class="my-3 border-top-gray-1">
        <div class="d-flex flex-column flex-lg-row justify-content-lg-center">
            <div style="max-width: 1900px" class="mt-5">
                <div class="d-flex flex-column flex-lg-row justify-content-lg-center">

                    <div class="flex-50 d-flex align-items-center justify-content-center p-0 justify-content-lg-end">
                        <div class="w-75 mx-lg-5">
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

                    <div class="flex-50 d-flex align-items-center justify-content-center justify-content-lg-start p-0">
                        <div class="w-75 ms-lg-5">
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

                    <div class="flex-50 d-flex align-items-center justify-content-center p-0 justify-content-lg-end">
                        <div class="w-75 mx-lg-5">
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
    </div>

    <div style="display: none" data-language>
        @json(__('travels'))
    </div>
    <input type="hidden" value="{{ route('trips.show', ["trip" => $trip_id]) }}" data-url-api>
    <input type="hidden" value="{{ route('booking.store') }}" data-url-create>
    <input type="hidden" value="{{ $sessionId }}" data-session-id>
</div>

@include('elements.footer')

@vite([
    'resources/sass/app.scss',
    'resources/js/app.js',
    'resources/js/trip.js'
    ])

</body>
</html>
