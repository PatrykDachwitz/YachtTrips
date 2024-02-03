<nav class="menu d-flex flex-wrap w-100 z-1 justify-content-center position-fixed py-2 top-0 {{ $backGroundColor ?? 'bg-dark' }}">
    <div class="d-flex w-100 px-2 align-items-center justify-content-between flex-column flex-lg-row" style="max-width: 1920px">
       <div class="d-flex justify-content-between w-mobile-100">
           <a class="fs-5 text-decoration-none text-white" href="/">
               <picture>
                   <source srcset="/files/icons/logo.webp" type="image/webp">
                   <img src="/files/icons/logo.png" alt="@lang('menu.altLogo')" height="30"/>
               </picture>
               @lang('menu.nameCompany')
           </a>
           <div class="d-flex d-lg-none menu-button-active">
               <picture>
                   <source srcset="/files/icons/close.webp" type="image/webp"/>
                   <img src="/files/icons/close.png" width="30" height="30" class="menu-image-close menu-button d-none" />
               </picture>
               <picture>
                   <source srcset="/files/icons/menu.webp" type="image/webp"/>
                   <img src="/files/icons/menu.png" width="30" height="30" class="menu-image-active menu-button d-flex" />
               </picture>
           </div>
       </div>
        <div class="d-none d-lg-flex menu-content justify-content-md-end pe-0 pe-md-0 flex-column flex-lg-row mt-2 mt-lg-0">
            <ul class="list-unstyled d-flex flex-column flex-lg-row justify-content-start my-2 ps-4 ps-md-0">
                <li class="mb-1 mb-md-0 border-end-grayMenu-1"><a class="text-white text-decoration-none mx-2 fs-5" href="{{ route('page.trips.index') }}">@lang('menu.availableTrips')</a></li>
                <li class="mb-1 mb-md-0 border-end-grayMenu-1" ><a href="{{ route('page.yachts') }}" class="text-white text-decoration-none mx-2 fs-5">@lang('menu.availableYachts')</a></li>
                <li class="mb-1 mb-md-0" ><a href="{{ route('page.oceans') }}" class="text-white text-decoration-none mx-2 fs-5" >@lang('menu.availableOceans')</a></li>
                <li class="mb-1 mb-md-0" ><a class="text-white text-decoration-none mx-2 fs-5 d-lg-none" >@lang('menu.travelsCart')</a></li>
            </ul>
            <div class="d-none d-lg-flex align-items-center ms-3">
                <a href="{{ route('cart') }}">
                    <picture>
                        <source srcset="/files/icons/koszyk.webp" type="image/webp">
                        <img src="/files/icons/koszyk.png" alt="@lang('menu.altCart')" width="35" height="35"/>
                    </picture>
                </a>
            </div>
        </div>
    </div>
</nav>


