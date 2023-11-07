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

    <div class="product d-flex">
        <div class=" w-50 px-5 pt-5 ">
            <div class="__main w-100 rounded-2 overflow-hidden">
                <picture>
                    <img src="http://127.0.0.1/slide1.jpg" class="img-fluid" width="911" height="760"/>
                </picture>
            </div>

            <div class="my-2 d-flex overflow-hidden">


                <div class="overflow-hidden rounded-3 me-2 card-mini">
                    <picture>
                        <img src="http://127.0.0.1/slide1.jpg" class="" width="114" height="95"/>
                    </picture>
                </div>
                <div class="overflow-hidden rounded-3 me-2 card-mini">
                    <picture>
                        <img src="http://127.0.0.1/slide1.jpg" class="" width="114" height="95"/>
                    </picture>
                </div>
                <div class="overflow-hidden rounded-3 me-2 card-mini">
                    <picture>
                        <img src="http://127.0.0.1/slide1.jpg" class="" width="114" height="95"/>
                    </picture>
                </div>
                <div class="overflow-hidden rounded-3 me-2 card-mini">
                    <picture>
                        <img src="http://127.0.0.1/slide1.jpg" class="" width="114" height="95"/>
                    </picture>
                </div>
                <div class="overflow-hidden rounded-3 me-2 card-mini">
                    <picture>
                        <img src="http://127.0.0.1/slide1.jpg" class="" width="114" height="95"/>
                    </picture>
                </div>
                <div class="overflow-hidden rounded-3 me-2 card-mini">
                    <picture>
                        <img src="http://127.0.0.1/slide1.jpg" class="" width="114" height="95"/>
                    </picture>
                </div>


            </div>
        </div>


        <div class="product-configurator w-50 pt-5 px-2 d-flex flex-column justify-content-start">
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
