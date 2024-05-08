<script setup>

</script>

<template>
    <nav class="offcanvas-body p-lg-4 menu" data-bs-theme="dark" style="min-width: 220px !important;">
        <div class="d-flex align-items-center w-100 justify-content-between p-2 px-4 p-lg-0">
            <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center text-white text-decoration-none">
                <picture>
                    <source srcset="/files/icons/avatar.webp" type="image/webp">
                    <img src="/files/icons/avatar.webp" alt="Avatar admin" class="me-2" width="30" height="30"/>
                </picture>
                <strong class="fs-5">Patryk</strong>
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

        <hr class="d-none d-lg-block" />


        <div class="menu-content d-none d-lg-block border-top-grayUltraLight-mobile-1 flex-column flex-lg-row">
            <ul class="list-unstyled ps-4 ps-lg-0 mb-0">

                <li>
                    <div class="btn btn-toggle d-inline-flex align-items-center rounded border-0 fs-5 ps-0 collapsed" data-bs-toggle="collapse" data-bs-target="#sale" aria-expanded="false">
                        <picture>
                            <source srcset="/files/icons/sales.webp" type="image/webp">
                            <img src="/files/icons/sales.png" class="me-2" width="30" height="30">
                        </picture>
                        @lang('admin.sale')
                    </div>
                    <div class="collapse ms-2" id="sale" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ms-4">
                            <li><a href="{{ route('admin.views.index', ['views' => "orders"]) }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.order')</a></li>
                            <li><a href="{{ route('admin.views.index', ['views' => "booking"]) }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.booking')</a></li>
                            <li><a href="{{ route('admin.views.index', ['views' => "vacationers"]) }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.client')</a></li>
                        </ul>
                    </div>
                </li>

                <li>
                    <div class="btn btn-toggle d-inline-flex align-items-center rounded border-0 fs-5 ps-0 collapsed" data-bs-toggle="collapse" data-bs-target="#travels" aria-expanded="false">
                        <picture>
                            <source srcset="/files/icons/travel.webp" type="image/webp">
                            <img src="/files/icons/travel.png" class="me-2" width="30" height="30">
                        </picture>
                        @lang('admin.travels')
                    </div>
                    <div class="collapse ms-2" id="travels" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ms-4">
                            <li><a href="{{ route('admin.views.index', ['views' => "trips"]) }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.trips')</a></li>
                            <li><a href="{{ route('admin.views.index', ['views' => "yachts"]) }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.yachts')</a></li>
                            <li><a href="{{ route('admin.views.index', ['views' => "oceans"]) }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.oceans')</a></li>
                            <li><a href="{{ route('admin.views.index', ['views' => "rooms"]) }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.rooms')</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="btn btn-toggle d-inline-flex align-items-center rounded border-0 fs-5 ps-0 collapsed" data-bs-toggle="collapse" data-bs-target="#content" aria-expanded="false">
                        <picture>
                            <source srcset="/files/icons/content.webp" type="image/webp">
                            <img src="/files/icons/content.png" class="me-2" width="30" height="30">
                        </picture>
                        @lang('admin.content')
                    </div>
                    <div class="collapse ms-2" id="content" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ms-4">
                            <li><a href="{{ route('admin.views.index', ['views' => "banners"]) }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.banner')</a></li>
                            <li><a href="{{ route('admin.views.index', ['views' => "categoryBanners"]) }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.categoriesBanner')</a></li>
                            <li><a href="{{ route('admin.views.index', ['views' => "pages"]) }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.pages')</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="btn btn-toggle d-inline-flex align-items-center rounded border-0 fs-5 ps-0 collapsed">
                        <div>
                            <picture>
                                <source srcset="/files/icons/file-management.webp" type="image/webp">
                                <img src="/files/icons/file-management.png" width="25" height="25">
                            </picture>
                        </div>
                        <a class="text-decoration-none fs-5 btn btn-toggle" href="{{ route('admin.fileManager') }}">@lang('admin.files_manager')</a>
                    </div>
                </li>
                <li>
                    <a href="{{ route('admin.views.index', ['views' => 'users']) }}"
                       class="btn btn-toggle d-inline-flex align-items-center rounded border-0 fs-5 ps-0 collapsed">
                        <picture>
                            <source srcset="/files/icons/group.webp" type="image/webp">
                            <img src="/files/icons/group.png" class="me-2" width="30" height="30">
                        </picture>
                        @lang('admin.users')
                    </a>
                </li>
            </ul>

            <hr class="d-none d-lg-block"/>

            <form method="post" class="border-top-grayUltraLight-mobile-1 ps-4 pb-1 p-lg-0" action="{{ route('admin.logout') }}">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 fs-6 ps-0 collapsed">
                    @csrf
                    <picture>
                        <source srcset="/files/icons/logout.webp" type="image/webp">
                        <img src="/files/icons/logout.png" class="me-2" width="25" height="25">
                    </picture>
                    @lang('admin.logOut')
                </button>
            </form>
        </div>
    </nav>

</template>

<style scoped>

</style>
