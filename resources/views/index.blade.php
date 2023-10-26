<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
<div class="container-fluid d-flex flex-column m-0 p-0 overflow-hidden">
    @include('elements.menu')


    @foreach($contents as $content)
        @include('mainPage.' . $content->templates->name, [
            'content' => $content
        ])
    @endforeach

</div>
@include('elements.footer')

@vite([ 'resources/sass/app.scss',
                'resources/js/app.js'])
</body>
</html>
