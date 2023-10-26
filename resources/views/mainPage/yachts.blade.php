<div class="sliders bg-gray py-5">

    @if(!empty($content->description))
        <h2 class="d-flex w-100 justify-content-center pb-4 d-xxl-none"><b>{{ $content->description }}</b></h2>
    @endempty

    <div class="sliders-image m-0 p-0 d-flex justify-content-center justify-content-lg-end align-items-center overflow-hidden">
        <div class="ms-4">
            <picture>
                <source srcset="http://127.0.0.1/mobil-slide1.jpg" media="(max-width: 767px)" width="700" height="444" >
                <source srcset="http://127.0.0.1/slide1233.jpg" media="(max-width: 1400px)" width="500" height="263" >
                <img src="http://127.0.0.1/slide1222.jpg" width="950" height="550" class="rounded-4"  />
            </picture>
        </div>
    </div>

    <div class="sliders-content m-0 px-5 px-xxl-0 ps-xxl-5 pe-xxl-0 pt-5 pt-xxl-0 d-flex flex-column align-items-end justify-content-center align-items-xxl-start">
        <div class="d-flex">
            <div class="me-3 d-flex align-items-center">
                <div>
                    <button class="btn btn-dark fs-3" data-category-banner="sliders" data-button="back">
                        <bold><</bold>
                    </button>
                </div>
            </div>
            <div class="sliders-content-text selected" data-category-banner="sliders" data-id="1">
                <h2 class="fs-2 pb-4 d-none d-xxl-block"><b>Dlaczego Wybrać Nasze Wycieczki?</b></h2>
                <ul class=" fs-5 list-unstyled">
                    <li>🌊 <b>Wyjątkowe Doświadczenia:</b> Nasze wycieczki na jachtach to podróż, którą będziesz wspominać przez całe życie. Zanurz się w kulturze, historii i przyrodzie oceanów.</li>
                    <li>🚤 <b>Luksusowe Jachty:</b> Podróżuj w stylu na naszych luksusowych jachtach, które łączą komfort, elegancję i najwyższą jakość obsługi.</li>
                    <li>🌴 <b>Ekskluzywne Destynacje:</b> Odkryj odległe i urocze miejsca, do których nie dostaniesz się inaczej. Twórz wyjątkowe wspomnienia na nieodkrytych szlakach.</li>
                </ul>
            </div>
            <div class="sliders-content-text d-none" data-category-banner="sliders" data-id="2">
                <h2 class="fs-2 pb-4 d-none d-xxl-block"><b>Dlaczego Wybrać Nasze Wycieczki?</b></h2>
                <ul class=" fs-5 list-unstyled">
                    <li>🌊 <b>Wyjątkowe Doświadczenia2:</b> Nasze wycieczki na jachtach to podróż, którą będziesz wspominać przez całe życie. Zanurz się w kulturze, historii i przyrodzie oceanów.</li>
                    <li>🚤 <b>Luksusowe Jachty2:</b> Podróżuj w stylu na naszych luksusowych jachtach, które łączą komfort, elegancję i najwyższą jakość obsługi.</li>
                    <li>🌴 <b>Ekskluzywne Destynacje2:</b> Odkryj odległe i urocze miejsca, do których nie dostaniesz się inaczej. Twórz wyjątkowe wspomnienia na nieodkrytych szlakach.</li>
                </ul>
            </div>
            <div class="ms-3 d-flex align-items-center">
                <div>
                    <button class="btn btn-dark fs-3" data-category-banner="sliders" data-button="next">
                        <bold>></bold>
                    </button>
                </div>
            </div>
        </div>

    </div>

</div>
