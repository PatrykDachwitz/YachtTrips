@extends('pages')

@section('content')
    <div class="d-flex flex-column justify-content-start">
        <div class="w-100 text-center mt-3">
            <h1 class="fs-1"><strong>@lang('travels.availableTrips')</strong></h1>
        </div>

        <div id="app">

        </div>
    </div>
@endsection

@section('script')
@vite(['resources/js/trips.js'])

    <input type="hidden" value="{{ route('yachts.index') }}" name="yacht_id" data-url-filters>
<!--
<input type="hidden" value="{{ route('oceans.index') }}" name="ocean_id" data-url-filters>
    <input type="hidden" value="" name="count_day" data-url-filters>-->
@endsection
