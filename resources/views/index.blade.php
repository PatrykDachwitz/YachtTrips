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
    <nav class="d-flex flex-wrap w-100 align-items-center justify-content-center position-fixed z-1 bg-gray justify-content-between px-2 py-1">
        <a class="fs-4 text-decoration-none text-white">
            BoatsTrip
        </a>
        <div class=" d-md-flex testMenu justify-content-md-end pe-0 pe-md-0">
            <div class="d-flex flex-column d-md-none w-100">
                <div class="d-flex w-100 justify-content-between px-3 py-2">
                    <a class="fs-4 text-decoration-none text-white">
                        BoatsTrip
                    </a>
                    <img src="http://127.0.0.1/menu.png" width="30" height="30"/>
                </div>
                <hr class="text-white m-0 p-0" style="height: 3px" />
            </div>
            <ul class="list-unstyled d-flex flex-column flex-md-row justify-content-start my-2 ps-4 ps-md-0">
                @for($i = 1; $i < 5; $i++)
                    <li class="mb-1 mb-md-0"><a class="text-white mx-2 fs-5">Link {{ $i }}</a></li>
                @endfor
            </ul>
        </div>
        <img src="http://127.0.0.1/menu.png" class="d-block d-md-none" width="30" height="30"/>
    </nav>
    <div class="d-flex justify-content-center banner-container">
        <div class="banner position-relative">
            <picture>
                <source srcset="http://127.0.0.1/mobile-banner1.jpg" media="(max-width: 767px)" width="767" height="800"/>
                <img src="http://127.0.0.1/banner1.jpg" width="1920" height="800" />
            </picture>
            <div class="banner-text position-absolute z-5 text-danger top-0 ms-5 d-flex flex-column justify-content-center">
                <h2 class="fs-1">Lorem Ipsum is simply</h2>
                <p class="w-25">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially u</p>
                <div>
                    <a class="btn btn-info">Sprawdz ofertę</a>
                </div>
            </div>
        </div>
    </div>

    @foreach($content as $contents)
        @include('mainPage.' . $content->templates->name, [
            'content' => $content->banners
        ])
    @endforeach

</div>
@include('elements.footer')

@vite([ 'resources/sass/app.scss',
                'resources/js/app.js'])
</body>
</html>
