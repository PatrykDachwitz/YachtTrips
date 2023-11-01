<nav class="offcanvas-body p-4" data-bs-theme="dark">
    <a class="navbar-brand" href="#">Yacht trips</a>

    <hr />

    <ul class="list-unstyled ps-0">
        <li>
            <div class="btn btn-toggle d-inline-flex align-items-center rounded border-0 fs-5 ps-0 collapsed" data-bs-toggle="collapse" data-bs-target="#banners" aria-expanded="false">
                <div class="pe-1 d-flex align-items-center icons-menu">
                    <picture>
                        <source srcset="/files/icons/plus.webp" type="image/webp">
                        <img src="/files/icons/plus.png" width="20" height="20" class="plus">
                    </picture>
                    <picture>
                        <source srcset="/files/icons/minus.webp" type="image/webp">
                        <img src="/files/icons/minus.png" width="20" height="20" class="minus">
                    </picture>
                </div>
                @lang('admin.banner')
            </div>
            <div class="collapse ms-2" id="banners" style="">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{ route('admin.banners.index') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.listBanner')</a></li>
                    <li><a href="{{ route('admin.banners.create') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.newBanner')</a></li>
                </ul>
            </div>
        </li>
        <li>
            <div class="btn btn-toggle d-inline-flex align-items-center rounded border-0 fs-5 ps-0 collapsed" data-bs-toggle="collapse" data-bs-target="#templates" aria-expanded="false">
                <div class="pe-1 d-flex align-items-center icons-menu">
                    <picture>
                        <source srcset="/files/icons/plus.webp" type="image/webp">
                        <img src="/files/icons/plus.png" width="20" height="20" class="plus">
                    </picture>
                    <picture>
                        <source srcset="/files/icons/minus.webp" type="image/webp">
                        <img src="/files/icons/minus.png" width="20" height="20" class="minus">
                    </picture>
                </div>
                @lang('admin.templates')
            </div>
            <div class="collapse ms-2" id="templates" style="">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{ route('admin.templates.index') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.listTemplate')</a></li>
                    <li><a href="{{ route('admin.templates.create') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.newTemplate')</a></li>
                </ul>
            </div>
        </li>
        <li>
            <div class="btn btn-toggle d-inline-flex align-items-center rounded border-0 fs-5 ps-0 collapsed" data-bs-toggle="collapse" data-bs-target="#oceans" aria-expanded="false">
                <div class="pe-1 d-flex align-items-center icons-menu">
                    <picture>
                        <source srcset="/files/icons/plus.webp" type="image/webp">
                        <img src="/files/icons/plus.png" width="20" height="20" class="plus">
                    </picture>
                    <picture>
                        <source srcset="/files/icons/minus.webp" type="image/webp">
                        <img src="/files/icons/minus.png" width="20" height="20" class="minus">
                    </picture>
                </div>
                @lang('admin.oceans')
            </div>
            <div class="collapse ms-2" id="oceans" style="">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{ route('admin.oceans.index') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.listOceans')</a></li>
                    <li><a href="{{ route('admin.oceans.create') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.newOceans')</a></li>
                </ul>
            </div>
        </li>
        <li>
            <div class="btn btn-toggle d-inline-flex align-items-center rounded border-0 fs-5 ps-0 collapsed" data-bs-toggle="collapse" data-bs-target="#trips" aria-expanded="false">
                <div class="pe-1 d-flex align-items-center icons-menu">
                    <picture>
                        <source srcset="/files/icons/plus.webp" type="image/webp">
                        <img src="/files/icons/plus.png" width="20" height="20" class="plus">
                    </picture>
                    <picture>
                        <source srcset="/files/icons/minus.webp" type="image/webp">
                        <img src="/files/icons/minus.png" width="20" height="20" class="minus">
                    </picture>
                </div>
                @lang('admin.trips')
            </div>
            <div class="collapse ms-2" id="trips" style="">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{ route('admin.trips.index') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.listTrips')</a></li>
                    <li><a href="{{ route('admin.trips.create') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.newTrips')</a></li>
                </ul>
            </div>
        </li>
        <li>
            <div class="btn btn-toggle d-inline-flex align-items-center rounded border-0 fs-5 ps-0 collapsed" data-bs-toggle="collapse" data-bs-target="#yachts" aria-expanded="false">
                <div class="pe-1 d-flex align-items-center icons-menu">
                    <picture>
                        <source srcset="/files/icons/plus.webp" type="image/webp">
                        <img src="/files/icons/plus.png" width="20" height="20" class="plus">
                    </picture>
                    <picture>
                        <source srcset="/files/icons/minus.webp" type="image/webp">
                        <img src="/files/icons/minus.png" width="20" height="20" class="minus">
                    </picture>
                </div>
                @lang('admin.yachts')
            </div>
            <div class="collapse ms-2" id="yachts" style="">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{ route('admin.yachts.index') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.listYachts')</a></li>
                    <li><a href="{{ route('admin.yachts.create') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.newYachts')</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
<style>
    div div.icons-menu img.plus {
        display: none !important;
    }
    div.collapsed div.icons-menu img.plus {
        display: block !important;
    }

    div.collapsed div.icons-menu img.minus {
        display: none !important;;
    }

</style>
