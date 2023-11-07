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
<div class="container-fluid d-flex flex-column m-0 p-0 overflow-hidden justify-content-between min-vh-100">
    @include('elements.menu')

    <div class="container pages-content d-flex flex-column ">
        <div class="pages-content__header fs-6 p-2">Strony > Polityka prywatności</div>
        <div class="pages-content-content px-2 d-flex justify-content-center align-items-center pages-content">
            @yield('content')
        </div>
    </div>



@include('elements.footer')

@vite([ 'resources/sass/app.scss'])
    <style>
        .pages-content {
            flex: 1;

        }

        .pages-content__header {
            text-transform: uppercase;
        }

    </style>
</div>
</body>
</html>
