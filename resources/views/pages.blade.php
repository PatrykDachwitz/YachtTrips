<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite([ 'resources/sass/app.scss'])
</head>
<body>
<div class="container-fluid d-flex flex-column m-0 p-0 overflow-hidden justify-content-between min-vh-100">
    @include('elements.menu')

    <div class="d-flex container-fluid justify-content-center">
        <div class="container-1920 p-5">
            <h1 class="fs-1 pb-3"><strong>{{ $content->name }}</strong></h1>
            <div>{!! $content->description ?? "" !!}</div>
        </div>
    </div>

    @include('elements.footer')
</div>
</body>
</html>
