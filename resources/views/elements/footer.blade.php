<footer class="footer bg-dark d-flex flex-column text-white shadow align-items-center ">
    <div class="supportNavigation d-flex justify-content-lg-center flex-column flex-lg-row py-4 align-items-center align-items-lg-start container-1920">
        <div class="d-flex flex-column align-items-center align-items-lg-start me-lg-5">
            <h3 class="fs-4 mb-3 mb-lg-0" >@lang('footer.companyName')</h3>
            <div class="d-flex flex-row flex-lg-column me-5 me-lg-0">
                <div class=" d-flex flex-column">

                    <span class="fs-6">@lang('footer.companyStreet')</span>
                    <span class="fs-6 ">@lang('footer.companyCityAndPostalCode')</span>
                </div>
                <hr class="w-50 d-none d-lg-block"/>
                <div class=" d-flex flex-column ms-5 ms-lg-0">
                    <span class="fs-6 mb-1">@lang('footer.companyNip')</span>

                    <span class="fs-6 mb-1">@lang('footer.companyPhone')</span>

                    <span class="fs-6">@lang('footer.companyMail')</span>
                </div>

            </div>
            <hr class="w-100 d-block d-lg-none"/>
        </div>
        <div class="d-flex flex-column mx-lg-5">
            <h3 class="fs-4">@lang('footer.information')</h3>
            <ul class="colorGray list-unstyled fs-5 d-none d-lg-block">
                <li><a class="text-decoration-none colorGray" href="/polityka_prywatnosci">@lang('footer.privacyPolicy')</a></li>
                <li><a class="text-decoration-none colorGray" href="/regulamin">@lang('footer.statute')</a></li>
                <li><a class="text-decoration-none colorGray" href="/kontakt">@lang('footer.contact')</a></li>
            </ul>
        </div>
{{--        <div class="d-flex flex-column ms-lg-5">--}}
{{--            <h3 class="fs-4">@lang('footer.clientAccount')</h3>--}}
{{--            <ul class="colorGray list-unstyled fs-5 d-none d-lg-block">--}}
{{--                <li><a class="text-decoration-none colorGray" href="{{ route('pages', [ "id" => 2]) }}">@lang('footer.clientOrders')</a></li>--}}
{{--                <li><a class="text-decoration-none colorGray" href="{{ route('pages', [ "id" => 1]) }}">@lang('footer.clientLogIn')</a></li>--}}
{{--                <li><a class="text-decoration-none colorGray" href="{{ route('pages', [ "id" => 3]) }}">@lang('footer.clientRegistration')</a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
    </div>
    <div class="footer-bottom d-flex flex-column  flex-md-row py-2 fs-6  justify-content-center justify-content-lg-around colorGray w-100">
        <span class="text-center mb-1 mb-lg-0">© Copyright 2023 <b>BoatsTrip</b></span>
        <span class="text-center">created by <b>Patryk Dachwitz</b></span>
    </div>
</footer>
