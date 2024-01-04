<nav class="offcanvas-body p-4" data-bs-theme="dark" style="min-width: 220px !important;">
    <div class="d-flex align-items-center">
        <a href="/admin/banners" class="d-flex align-items-center">
            <picture>
                <source srcset="/files/icons/avatar.webp" type="image/webp">
                <img src="/files/icons/avatar.webp" alt="Avatar admin" class="me-2" width="25" height="25"/>
            </picture>
            <strong class="fs-5">{{ auth()->user()->name }}</strong>
        </a>
    </div>

    <hr />


    <ul class="list-unstyled">

        <li>
            <div class="btn btn-toggle d-inline-flex align-items-center rounded border-0 fs-5 ps-0 collapsed" data-bs-toggle="collapse" data-bs-target="#sale" aria-expanded="false">
                <div class="pe-1 d-flex align-items-center icons-menu">
                    <picture>
                        <source srcset="/files/icons/sales.webp" type="image/webp">
                        <img src="/files/icons/sales.png" width="25" height="25">
                    </picture>
                </div>
                @lang('admin.sale')
            </div>
            <div class="collapse ms-2" id="sale" style="">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small fs-6 ps-2">
                    <li><a href="{{ route('admin.views.index', ['views' => "orders"]) }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.order')</a></li>
                    <li><a href="{{ route('admin.views.index', ['views' => "booking"]) }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.booking')</a></li>
                    <li><a href="{{ route('admin.views.index', ['views' => "clients"]) }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.client')</a></li>
                    <li><a href="{{ route('admin.views.index', ['views' => "payments"]) }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.payments')</a></li>
                </ul>
            </div>
        </li>

        <li>
            <div class="btn btn-toggle d-inline-flex align-items-center rounded border-0 fs-5 ps-0 collapsed" data-bs-toggle="collapse" data-bs-target="#travels" aria-expanded="false">
                <div class="pe-1 d-flex align-items-center icons-menu">
                    <picture>
                        <source srcset="/files/icons/travel.webp" type="image/webp">
                        <img src="/files/icons/travel.png" width="25" height="25">
                    </picture>
                </div>
                @lang('admin.travels')
            </div>
            <div class="collapse ms-2" id="travels" style="">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small fs-6 ps-2">
                    <li><a href="{{ route('admin.views.index', ['views' => "trips"]) }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.trips')</a></li>
                    <li><a href="{{ route('admin.views.index', ['views' => "yachts"]) }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.yachts')</a></li>
                    <li><a href="{{ route('admin.views.index', ['views' => "oceans"]) }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.oceans')</a></li>
                    <li><a href="{{ route('admin.views.index', ['views' => "rooms"]) }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.rooms')</a></li>
                </ul>
            </div>
        </li>
        <li>
            <div class="btn btn-toggle d-inline-flex align-items-center rounded border-0 fs-5 ps-0 collapsed" data-bs-toggle="collapse" data-bs-target="#content" aria-expanded="false">
                <div class="pe-1 d-flex align-items-center icons-menu">
                    <picture>
                        <source srcset="/files/icons/content.webp" type="image/webp">
                        <img src="/files/icons/content.png" width="25" height="25">
                    </picture>
                </div>
                @lang('admin.content')
            </div>
            <div class="collapse ms-2" id="content" style="">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small fs-6 ps-2">
                    <li><a href="{{ route('admin.views.index', ['views' => "banners"]) }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.banner')</a></li>
                    <li><a href="{{ route('admin.views.index', ['views' => "categoriesBanner"]) }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.categoriesBanner')</a></li>
                    <li><a href="{{ route('admin.views.index', ['views' => "pages"]) }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.pages')</a></li>
                </ul>
            </div>
        </li>
        <li>
            <div class="btn btn-toggle d-inline-flex align-items-center rounded border-0 fs-5 ps-0 collapsed" data-bs-toggle="collapse" aria-expanded="false">
                <div class="pe-1 d-flex align-items-center icons-menu">
                    <picture>
                        <source srcset="/files/icons/group.webp" type="image/webp">
                        <img src="/files/icons/group.png" width="25" height="25">
                    </picture>
                </div>
                <a href="{{ route('admin.logout') }}" >@lang('admin.users')</a>
            </div>
        </li>
        <li>
            <div class="btn btn-toggle d-inline-flex align-items-center rounded border-0 fs-5 ps-0 collapsed" data-bs-toggle="collapse" aria-expanded="false">
                <div>
                    <picture>
                        <source srcset="/files/icons/file-management.webp" type="image/webp">
                        <img src="/files/icons/file-management.png" width="25" height="25">
                    </picture>
                </div>
                <a>@lang('admin.files_manager')</a>
            </div>
        </li>
    </ul>

    <hr />

    <div>
        <picture>
            <source srcset="/files/icons/logout.webp" type="image/webp">
            <img src="/files/icons/logout.png" width="25" height="25">
        </picture>
        <a>@lang('admin.logOut')</a>
    </div>
</nav>
