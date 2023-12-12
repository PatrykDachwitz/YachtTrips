<!doctype html>
<html lang="pl">
<head>
    @include('elements.header')
</head>
<body>
<div class="container-fluid d-flex flex-column m-0 p-0 overflow-hidden min-vh-100 justify-content-between">

    @include('elements.menu')

    <div class="container">
        <div>
            Podsumowanie zamówienai
        </div>
    </div>

    @include('elements.footer')

</div>
@vite([
    'resources/sass/app.scss',
    'resources/js/app.js',
    'resources/js/cart.js'
    ])
</body>
</html>
