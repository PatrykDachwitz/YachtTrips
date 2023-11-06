<!DOCTYPE html>
<html lang="pl" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CMS - Yacht project</title>
    @vite(['resources/sass/admin/app.scss'])

</head>
<body class="antialiased">

<div class="dashboard">
    <div id="navbar" class="shadow bg-dark text-white">
        @include('admin.menu')
    </div>
    <div class="dashboard-content">
        <div class="windowAction rounded-3 shadow position-relative" id="app">

        </div>
    </div>
</div>
<div style="display: none" data-language>
    @json(__('vue'))
</div>
@vite(['resources/js/admin/app.js'])
@yield('script')

</body>
</html>
