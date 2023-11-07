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

    <div class="w-100 fs-1"><h1>Koszyk</h1></div>

    <div class="cart p-3">
        <div class="cart-heders fs-2">
            1. Sczegół zamóienia
        </div>
        <div class="cart-content border-top-gray-1 d-none">
            <div class="list-orders d-flex flex-column pt-2 px-3">
                <div class="bg-gray shadow-sm d-flex justify-content-between align-items-center p-3 mb-2">
                    <div class="rounded-2 overflow-hidden">
                        <picture>
                            <img src="http://127.0.0.1/slide1.jpg" width="245" height="150" />
                        </picture>
                    </div>
                    <div class="d-flex justify-content-evenly w-100 px-3 align-items-center">
                        <div>
                            DAta: <strong>25.11.2023 - 26.11.2024</strong>
                        </div>
                        <div>
                            Ilość pokoji: <strong>12</strong>
                        </div>
                        <div>
                            Ilośc osób: <strong>5 (Dorosłych), 4 (Dzieci)</strong>
                        </div>

                        <div>
                            Cena:&nbsp;<strong>120zł</strong>
                        </div>
                    </div>
                    <div class="btn btn-danger">
                        Usuń
                    </div>
                </div>
                <div class="bg-gray shadow-sm d-flex justify-content-between align-items-center p-3 mb-2">
                    <div class="rounded-2 overflow-hidden">
                        <picture>
                            <img src="http://127.0.0.1/slide1.jpg" width="245" height="150" />
                        </picture>
                    </div>
                    <div class="d-flex justify-content-evenly w-100 px-3 align-items-center">
                        <div>
                            DAta: <strong>25.11.2023 - 26.11.2024</strong>
                        </div>
                        <div>
                            Ilość pokoji: <strong>12</strong>
                        </div>
                        <div>
                            Ilośc osób: <strong>5 (Dorosłych), 4 (Dzieci)</strong>
                        </div>

                        <div>
                            Cena:&nbsp;<strong>120zł</strong>
                        </div>
                    </div>
                    <div class="btn btn-danger">
                        Usuń
                    </div>
                </div>
                <div class="bg-gray shadow-sm d-flex justify-content-between align-items-center p-3 mb-2">
                    <div class="rounded-2 overflow-hidden">
                        <picture>
                            <img src="http://127.0.0.1/slide1.jpg" width="245" height="150" />
                        </picture>
                    </div>
                    <div class="d-flex justify-content-evenly w-100 px-3 align-items-center">
                        <div>
                            DAta: <strong>25.11.2023 - 26.11.2024</strong>
                        </div>
                        <div>
                            Ilość pokoji: <strong>12</strong>
                        </div>
                        <div>
                            Ilośc osób: <strong>5 (Dorosłych), 4 (Dzieci)</strong>
                        </div>

                        <div>
                            Cena:&nbsp;<strong>120zł</strong>
                        </div>
                    </div>
                    <div class="btn btn-danger">
                        Usuń
                    </div>
                </div>

                <div class="bg-gray shadow-sm d-flex justify-content-end align-items-center p-3 mb-2">
                    <div class="fs-4">
                        Suma: <strong class="fs-3">120zł</strong>
                    </div>

                </div>
            </div>
        </div>


        <div class="cart-heders fs-2">
            2. Dane osobowe
        </div>
        <div class="cart-content border-top-gray-1 ">
            <form class="row g-3 p-4">
                <div class="col-md-6">
                    <label for="firstName" class="form-label">@lang('pages.firstName')</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="@lang('pages.firstNameFake')" required>
                </div>
                <div class="col-md-6">
                    <label for="lastName" class="form-label">@lang('pages.lastName')</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="@lang('pages.lastNameFake')" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">@lang('pages.email')</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="@lang('pages.emailFake')" required>
                </div>
                <div class="col-md-6">
                    <label for="numberPhone" class="form-label">@lang('pages.numberPhone')</label>
                    <input type="text" class="form-control" id="numberPhone" name="numberPhone" placeholder="@lang('pages.numberPhoneFake')" required>
                </div>

                <div class="col-12">
                    <label for="contents" class="form-label">Dodatkowe informacje</label>
                    <textarea class="form-control" id="contents" name="contents" placeholder="@lang('pages.contentsFake')" required></textarea>
                </div>
                <div class="fs-6">
                    @lang('pages.requiredInput')
                </div>
                <div class="col-12">
                    <input type="submit" class="btn btn-dark" value="@lang('pages.sendMail')">
                </div>

            </form>
        </div>

        <div class="d-flex justify-content-between align-items-center mt-2 border-top-gray-1">
            <div class="btn btn-dark fs-4">
                Wstecz
            </div>

            <div class="btn btn-dark fs-4">
                DAlej
            </div>
        </div>
    </div>
    <!--
    <div class="product d-flex">
        <div class=" w-75 px-5 pt-5 ">

            <form class="row g-3 p-4">
                <div class="col-md-6">
                    <label for="firstName" class="form-label">@lang('pages.firstName')</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="@lang('pages.firstNameFake')" required>
                </div>
                <div class="col-md-6">
                    <label for="lastName" class="form-label">@lang('pages.lastName')</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="@lang('pages.lastNameFake')" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">@lang('pages.email')</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="@lang('pages.emailFake')" required>
                </div>
                <div class="col-md-6">
                    <label for="numberPhone" class="form-label">@lang('pages.numberPhone')</label>
                    <input type="text" class="form-control" id="numberPhone" name="numberPhone" placeholder="@lang('pages.numberPhoneFake')" required>
                </div>

                <div class="col-12">
                    <label for="contents" class="form-label">@lang('pages.contents')</label>
                    <textarea class="form-control" id="contents" name="contents" placeholder="@lang('pages.contentsFake')" required></textarea>
                </div>
                <div class="fs-6">
                    @lang('pages.requiredInput')
    </div>
    <div class="col-12">
        <input type="submit" class="btn btn-dark" value="@lang('pages.sendMail')">
                </div>

            </form>

        </div>


        <div class="product-configurator w-25 pt-5 px-2 d-flex flex-column justify-content-start">
            <h2 class="fs-1 mb-3">Tytuł nazwa produkt</h2>
            <div class="row w-75 bg-gray p-3 shadow-sm overflow-hidden rounded-2 g-2">
                <div class="col-md-6">
                    <label for="category_banner_id" class="form-label">Ocean</label>
                    <select class="form-select" name="category_banner_id" data-form-main>
                            <option selected>Ocean antlatycki</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="category_banner_id" class="form-label">Jacht</label>
                    <select class="form-select" name="category_banner_id" data-form-main>
                        <option selected>Jacht Bt23</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Data rozpoczęcią wyceiczki</label>
                    <input type="email" class="form-control" id="validationCustom02" name="name" data-form-main>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Koneic wyceiczki</label>
                    <input type="email" class="form-control" id="validationCustom02" name="name" data-form-main>
                </div>
            </div>

            <div class="row w-75 bg-gray p-3 shadow-sm overflow-hidden rounded-2 g-2 my-3">
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Ilość dorosłych</label>
                    <input type="email" class="form-control" id="validationCustom02" name="name" data-form-main>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Ilość dzieci</label>
                    <input type="email" class="form-control" id="validationCustom02" name="name" data-form-main>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Ilość łużek</label>
                    <input type="email" class="form-control" id="validationCustom02" name="name" data-form-main>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Ilość pokoji</label>
                    <input type="email" class="form-control" id="validationCustom02" name="name" data-form-main>
                </div>
                <div class="col-md-6">
                    <label for="category_banner_id" class="form-label">Tryp</label>
                    <select class="form-select" name="category_banner_id" data-form-main>
                        <option selected>Podstawowe</option>
                        <option selected>Premium</option>
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-end w-75 align-items-center">
                <div class="fs-4">Cena:&nbsp;<strong>100 zł</strong></div>
                <div class="btn btn-dark fs-5 ms-3">zamów wyceiczkę</div>
            </div>
        </div>

    </div>

    -->


    <div class="my-3 border-top-gray-1">
        <div class="buttons-gropu">
            Szablon
        </div>
    </div>
</div>
@include('elements.footer')

@vite([ 'resources/sass/app.scss',
                'resources/js/app.js'])


<style>
    .card-mini {
        min-width: 114px;
    }
</style>


</body>
</html>
