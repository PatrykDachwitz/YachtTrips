<!DOCTYPE html>
<html lang="pl_PL">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CMS - Yacht project</title>
    @vite(['resources/sass/admin/app.scss'])

</head>
<body class="antialiased">

<div class="dashboard">
    <div id="navbar" class="shadow bg-dark text-white">
        @include('cms.menu')
    </div>
    <div class="dashboard-content">
        <div class="windowAction rounded-3 shadow" id="app">

        </div>
    </div>
</div>

@vite(['resources/js/admin/app.js'])
@yield('script')

</body>
</html>
