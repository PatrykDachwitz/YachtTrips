<nav class="menu d-flex flex-wrap w-100 z-1 justify-content-center position-fixed py-2 top-0 {{ $backGroundColor ?? 'bg-dark' }}">
    <div class="d-flex w-100 px-2 align-items-center" style="max-width: 1920px">
        <a class="fs-5 text-decoration-none text-white" href="/">
            <picture>
                <source srcset="/files/icons/logo.webp" type="image/webp">
                <img src="/files/icons/logo.png" alt="@lang('menu.altLogo')" height="30"/>
            </picture>
            @lang('menu.nameCompany')
        </a>
        <div class=" d-md-flex menu-content justify-content-md-end pe-0 pe-md-0">
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
                <li class="mb-1 mb-md-0 border-end-grayMenu-1"><a class="text-white text-decoration-none mx-2 fs-5" href="{{ route('page.trips.index') }}">@lang('menu.availableTrips')</a></li>
                <li class="mb-1 mb-md-0 border-end-grayMenu-1" ><a class="text-white text-decoration-none mx-2 fs-5">@lang('menu.availableYachts')</a></li>
                <li class="mb-1 mb-md-0" ><a class="text-white text-decoration-none mx-2 fs-5" >@lang('menu.availableOceans')</a></li>
            </ul>
            <div class="d-flex align-items-center ms-3">
                <picture>
                    <source srcset="/files/icons/koszyk.webp" type="image/webp">
                    <img src="/files/icons/koszyk.png" alt="@lang('menu.altCart')" width="35" height="35"/>
                </picture>
            </div>
        </div>
    </div>
</nav>


