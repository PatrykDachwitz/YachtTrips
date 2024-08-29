<!doctype html>
<html lang="pl">
<head>
    @include('elements.header')
</head>
<body>
<div class="container-fluid d-flex flex-column m-0 p-0 overflow-hidden">

    @include('elements.menu', [
    'backGroundColor' => "bg-gray"
    ])

    @section('content')
        @foreach($contents as $content)
            @include('mainPage.' . $content->templates->name, [
                'content' => $content
            ])
        @endforeach
    @show

</div>
@include('elements.footer')

@vite([
    'resources/js/mainPage.js',
    ])
</body>
</html>


