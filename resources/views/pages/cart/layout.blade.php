<!doctype html>
<html lang="pl">
<head>
    @include('elements.header')
</head>
<body>
<div class="container-fluid d-flex flex-column m-0 p-0 overflow-hidden min-vh-100 justify-content-between">

    @include('elements.menu')

    <div class="container cart-container">

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

</div>
</body>
</html>
