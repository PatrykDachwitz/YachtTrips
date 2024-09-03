<!doctype html>
<html lang="en">
<head>
    @include('elements.header')
</head>
<body>
<div class="container-fluid d-flex flex-column m-0 p-0 overflow-hidden">

    @include('elements.menu')
    <div class="container product d-flex flex-column flex-lg-row product-main-container" style="margin-top: 60px !important;min-width: 100% !important;">
        @if(isset($trip))


            @include('elements.gallery', [
                "gallery" => $trip->gallery ?? []
            ])

            <div class="product-configurator w-100 max-lg-50 pt-5 px-2 d-flex flex-column justify-content-start align-items-center align-items-xxl-start" v-if="trip !== null">

                @include('elements.configuration', [
                    "trip" => $trip
                ])


                <div class="d-flex justify-content-end w-100 max-lg-75 align-items-center">
                    <div class="fs-4">@lang('travels.price'):&nbsp;<strong>{{ $trip->minimal_price }} zł</strong></div>
                    <div class="btn btn-dark fs-5 ms-3">@lang('travels.bookTrip')</div>
                </div>
            </div>
        @endif
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
                            <img class="img-fluid" src="/files/templates/sekcja_1.jpg" width="950" height="500"/>
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

</div>

@include('elements.footer')

{{--@vite([
    'resources/sass/app.scss',
    'resources/js/app.js',
    'resources/js/trip.js'
    ])--}}

</body>
</html>
