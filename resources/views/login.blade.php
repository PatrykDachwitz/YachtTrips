<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Login</title>
    @vite(['resources/sass/app.scss'])
</head>
<body>
    <div class="w-100 min-vh-100 d-flex align-items-center justify-content-center">
        <form class="bg-gray w-25 border-grayLight-1 px-5 py-3 rounded-2 shadow" action="{{ route('login') }}" class="row" method="POST">

            <div class="d-flex justify-content-center mb-4">
                <picture>
                    <source srcset="/files/icons/logo-gray.webp" type="image/webp">
                    <img src="/files/icons/logo-gray.png" height="100">
                </picture>
            </div>
            <div class="col-md-12 fs-5">
                <label for="validationCustom02" class="form-label">@lang('login.email')</label>
                <input type="email" class="form-control" id="validationCustom02" name="email" value="{{ old('email', '') }}" placeholder="@lang('login.emailTemplate')">
            </div>

            @if($errors->any())
                <div class="text-danger fs-5 mt-2">@lang('auth.errorLogin')</div>
            @endif

            @csrf
            <div class="col-md-12 fs-5 mt-4">
                <label for="validationCustom02" class="form-label">@lang('login.password')</label>
                <input type="password" value="{{ old('password', '') }}" class="form-control" id="validationCustom02" name="password" placeholder="@lang('login.passwordTemplate')" required>
            </div>

            <div>
                <input type="submit" class="btn btn-dark mt-3" value="@lang('login.send')">
            </div>
        </form>
    </div>
    @vite(['resources/js/app.js'])
</body>
</html>
