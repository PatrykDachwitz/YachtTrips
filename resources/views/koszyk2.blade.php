<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Koszyk</title>
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

@vite([
    'resources/sass/app.scss',
    'resources/js/app.js',
    'resources/js/cart.js'
    ])
</body>
</html>
