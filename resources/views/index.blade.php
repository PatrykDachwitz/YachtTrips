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

    <style>
        .testMenu {
            flex: 1;
            @media only screen and (max-width: 767px) {
                top: 0;
                left: 0;
                margin: 0;
                display: flex !important;
                position: absolute;
                z-index: 90;
                background-color: #2d3748;
                min-width: 100%;
                background-color: #212529;
                flex-direction: column;
                justify-content: flex-start;
                padding-bottom: 15px;
            }
        }

        .testMenu ul {
            @media only screen and (max-width: 767px) {
                min-width: 100%;
            }
        }

    </style>
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
        <style>
            nav {
                border-bottom: 1px solid rgba(255,255,255,.2);
            }
            div.banner-container {
                background-color: #212529;
            }
            div.banner {
                width: 1920px;
                height: 800px;
                max-height: 800px;
                position:relative;
            }
            div.banner-text {
                min-height: 800px;
                max-height: 800px;
            }
        </style>
    </div>

    <!--- sekcja oceanów **Gotowe** -->


    @include('mainPage.oceans', [
        'oceans' => $content[1]
    ])

    <!-- sekcja oceanów koniec-->

    <!--Sekcja wariant jachtów -->
    @include('mainPage.yachts', [
    'yachts' => $content[2]
    ])

    <!--Sekcja wariant jachtó koniec-->

    <!--Sekcja Dlaczego Nasza Flota **Gotowe**-->

    @include('mainPage.why', [
    'why' => $content[3]
    ])

    <!--Sekcja Dlaczego Nasza Flota koniec-->


    <!-- Sekcja bloga -->

    @include('mainPage.popularTrips', [
    'trips' => $content[4]
    ])

    <!-- Sekcja bloga koniec -->

    <!--Sekcja opini klientów **Gotowe**-->

    @include('mainPage.opinions', [
    'opinions' => $content[5]
    ])

    <!--Sekcja opini klientów koniec-->




</div>
@include('elements.footer')
<style>

    .cart-oceans-container {
        display: flex;
        justify-content: center;
    }
    .cart-oceans {
        border: 1px solid rgba(255,255,255,.2);
        border-radius: 5px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        flex: 350px 0;

    }

    .cart-oceans-content {
        flex: 1;
    }



    .rofilcontaineropinienion {
        border: 1px solid rgba(255,255,255,.2);
    }
    .miniSlider {
        min-width: 950px;
        min-height: 650px;
    }
    .bg-gray {
        background-color: rgba(133,133,133,.1);
    }
    div.activeCart {
        width: 415px;
        min-height: 450px;
    }
    div.activeCart div.slideClass {
        width: 415px;
        height: 296px;
    }
    div.activeCart div.content{
        width: 415px;
    }

    div.activeCart div.slideClass img{
        width: 415px;
        height: 296px;
    }
    div.content {
        width: 350px;
        flex: 1;
    }
    div.slideClass {
        width: 350px;
        height: 250px;
        overflow: hidden;
    }
</style>
@vite([ 'resources/sass/app.scss',
                'resources/js/app.js'])
</body>
</html>
