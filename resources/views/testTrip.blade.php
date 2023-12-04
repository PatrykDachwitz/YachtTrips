<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
<div class="container-fluid d-flex flex-column m-0 p-0 overflow-hidden">
    @include('elements.menu')
    <div class="container product d-flex" id="app">


    </div>
    <div class="my-3 border-top-gray-1">
        <div class="buttons-gropu">
            Szablon
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
