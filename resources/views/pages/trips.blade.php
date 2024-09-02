@extends('pages')
{{--

@include('elements.loadingPage')
--}}

@section('content')
    <div class="d-flex justify-content-center" style="margin-top: 65px">
        <div class="d-flex flex-column justify-content-start" style="max-width: 1920px">
            <div class="w-100 text-center mt-3">
                <h1 class="fs-1"><strong>@lang('travels.availableTrips')</strong></h1>
            </div>

            <div class="d-flex justify-content-between align-items-start">

                @include('elements.filters', [
                    'filters' => $filters
                ])
                <div class="contents row contents-proucts g-3 mb-3 mx-2 mx-lg-4">

                    @foreach($trips ?? [] as $trip)
                        <div class="col-6 col-md-4 col-lg-3 col-xxl-2">
                            <a href="{{ $trip->url }}" class="text-decoration-none text-black">
                                <div class="shadow rounded-2 overflow-hidden shadow-sm listing-product__container text-decoration-none text-black min-h-100 d-flex flex-column">
                                    <div>
                                        <picture>
                                            <source srcset="{{  $trip->imagesCategory[0]->link_webp }}" type="image/webp">
                                            <img src="{{ $trip->imagesCategory[0]->link_image }}" width="245" height="150" class="w-100"/>
                                        </picture>
                                    </div>

                                    <div class="p-2 d-flex ocean-content flex-column justify-content-between">
                                        <p class="fs-5 mb-0">{{ $trip->name }}</p>
                                        <div class="w-100 d-flex fs-6 align-items-center justify-content-end">
                                            <strong>od: {{ $trip->minimal_price }} zł</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection

