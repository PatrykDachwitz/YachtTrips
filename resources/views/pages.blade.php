<!doctype html>
<html lang="en">
<head>
    @include('elements.header')
</head>
<body>
<div class="container-fluid d-flex flex-column m-0 p-0 overflow-hidden justify-content-between min-vh-100">
    @include('elements.menu')

    @section('content')
        @isset($content)
            <div class="d-flex container-fluid justify-content-center" style="margin-top: 65px">
                <div class="container-1920 px-5 pb-5 pt-3">
                    <h1 class="fs-1 pb-3"><strong>{{ $content->name }}</strong></h1>
                    <div>{!! $content->description ?? "" !!}</div>
                </div>
            </div>
        @endisset
    @show

    @vite([ 'resources/js/app.js'])
    @yield('script')
    @include('elements.footer')
</div>
</body>
</html>


