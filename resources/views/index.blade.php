<!doctype html>
<html lang="en">
<head>
    @include('elements.header')
</head>
<body>
<div class="container-fluid d-flex flex-column m-0 p-0 overflow-hidden">
    @include('elements.menu')


    @section('content')
        @foreach($contents as $content)
            @include('mainPage.' . $content->templates->name, [
                'content' => $content
            ])
        @endforeach
    @show
</div>
@include('elements.footer')

@vite([ 'resources/sass/app.scss',
                'resources/js/mainPage.js',
                'resources/js/app.js',
])
</body>
</html>
