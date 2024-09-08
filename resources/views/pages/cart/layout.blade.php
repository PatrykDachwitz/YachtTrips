<!doctype html>
<html lang="pl">
<head>
    @include('elements.header')
</head>
<body>
<div class="container-fluid d-flex flex-column m-0 p-0 overflow-hidden min-vh-100 justify-content-between">

    @include('elements.menu')

    <div class="container cart-container">
        @error('mainError')
        <div class="position-absolute top-0 start-0 min-vh-100 w-100 d-flex justify-content-center align-items-center" id="errorMainMessage" style="z-index: 99">
            <div class="bg-danger rounded-1 text-white py-2 px-5 fs-5" ><b>@lang('pages.errorCart')</b></div>
        </div>
        @enderror
        <form class="d-flex flex-column-reverse flex-lg-row cart-container-left justify-content-center" method="POST">
            @csrf
            <div class="flex-1">
                @yield('content')
            </div>
            <div class="ms-lg-5 my-3 my-lg-0">
                @include('elements.summaryOrder', [
                    'order' => $order
                ])
            </div>
        </form>

    </div>

    @include('elements.footer')

    @vite([
    'resources/js/cart.js',
    ])

</div>
</body>
</html>
