<nav class="offcanvas-body p-4">
    <a class="navbar-brand" href="#">Offcanvas navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <hr />

    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
        <span class="fs-5 mb-2">Panel zarządzania</span>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Banery
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('admin.banners.index') }}">Lista banerów</a></li>
                <li><a class="dropdown-item" href="{{ route('admin.banners.category.index') }}">Kategorie</a></li>
            </ul>
        </li>
    </ul>
</nav>
