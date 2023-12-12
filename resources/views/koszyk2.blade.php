<!doctype html>
<html lang="pl">
<head>
    @include('elements.header')
</head>
<body>
<div class="container-fluid d-flex flex-column m-0 p-0 overflow-hidden min-vh-100 justify-content-between">

    @include('elements.menu')

    <div class="container" id="cart"> </div>

    @include('elements.footer')

</div>

<div style="display: none" data-language>
    @json(__('pages'))
</div>
<input type="hidden" value="{{ route('orders.showBySession', ['sessionId' => $sessionId]) }}" data-url-api/>
<input type="hidden" value="{{ route('orders.updateBySession', ['sessionId' => $sessionId]) }}" data-url-update/>
<input type="hidden" value="{{ route('booking.index') . '/' }}" data-url-delete-book/>



@vite([
    'resources/sass/app.scss',
    'resources/js/app.js',
    'resources/js/cart.js'
    ])
</body>
</html>
