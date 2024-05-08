<!DOCTYPE html>
<html lang="pl" >
<head>
    <link rel="icon" href="/files/icons/logo.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="X-CSRF-Token" content="{{ csrf_token() }}">
    <title>@lang('admin.title')</title>
    @vite(['resources/sass/admin/app.scss'])

</head>
<body id="app">



<div style="display: none !important;" data-lang>
    @json(__('admin'))
</div>
</body>
@vite(['resources/js/admin.js'])
</html>
