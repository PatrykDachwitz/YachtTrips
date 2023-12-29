@extends('pages')

@include('elements.loadingPage')

@section('content')
    <div class="d-flex justify-content-center" style="margin-top: 65px">
        <div class="d-flex flex-column justify-content-start" style="max-width: 1920px">
            <div class="w-100 text-center mt-3">
                <h1 class="fs-1"><strong>@lang('travels.availableTrips')</strong></h1>
            </div>

            <div id="app">

            </div>
        </div>
    </div>

@endsection


@section('script')
@vite([
    'resources/js/trips.js',
    ])

    <input type="hidden" value="{{ route('trips.index') }}" data-url-api/>
    <input type="hidden" value="{{ route('yachts.index') }}" name="yacht_id" data-url-filters-yachts>
    <input type="hidden" value="{{ route('oceans.index') }}" name="ocean_id" data-url-filters-oceans>
    <!--<input type="hidden" value="" name="count_day" data-url-filters>-->

    <div style="display: none" data-language>@json(__('travels'))</div>
@endsection
