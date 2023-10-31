<nav class="offcanvas-body p-4" data-bs-theme="dark">
    <a class="navbar-brand" href="#">Yacht trips</a>

    <hr />

    <ul class="list-unstyled ps-0">
        <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 fs-5" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                @lang('admin.banner')
            </button>
            <div class="collapse" id="home-collapse" style="">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{ route('admin.banners.index') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.listBanner')</a></li>
                    <li><a href class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">@lang('admin.newBanner')</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
<style>
    .menu-li {
        color: white !important;
    }

</style>
