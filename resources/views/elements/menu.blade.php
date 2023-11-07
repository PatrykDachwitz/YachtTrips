<nav class="menu d-flex flex-wrap w-100 align-items-center justify-content-center z-1 bg-gray justify-content-between px-2 py-1 bg-dark">
    <a class="fs-4 text-decoration-none text-white">
        BoatsTrip
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
            @for($i = 1; $i < 5; $i++)
                <li class="mb-1 mb-md-0"><a class="text-white mx-2 fs-5">Link {{ $i }}</a></li>
            @endfor
        </ul>
    </div>
    <img src="http://127.0.0.1/menu.png" class="d-block d-md-none" width="30" height="30"/>
</nav>
