@extends('pages')

@section('content')

    <div class="pages-content-content__content d-flex flex-column justify-content-center align-items-center">
        <h1 class="fs-1">Kontakt</h1>

        <div class="bg-gray rounded-3 shadow row overflow-hidden mb-3">
            <form class="row g-3 p-4">
                <div class="col-md-6">
                    <label for="firstName" class="form-label">@lang('pages.firstName')</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="@lang('pages.firstNameFake')" required>
                </div>
                <div class="col-md-6">
                    <label for="lastName" class="form-label">@lang('pages.lastName')</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="@lang('pages.lastNameFake')" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">@lang('pages.email')</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="@lang('pages.emailFake')" required>
                </div>
                <div class="col-md-6">
                    <label for="numberPhone" class="form-label">@lang('pages.numberPhone')</label>
                    <input type="text" class="form-control" id="numberPhone" name="numberPhone" placeholder="@lang('pages.numberPhoneFake')" required>
                </div>

                <div class="col-12">
                    <label for="contents" class="form-label">@lang('pages.contents')</label>
                    <textarea class="form-control" id="contents" name="contents" placeholder="@lang('pages.contentsFake')" required></textarea>
                </div>
                <div class="fs-6">
                    @lang('pages.requiredInput')
                </div>
                <div class="col-12">
                    <input type="submit" class="btn btn-dark" value="@lang('pages.sendMail')">
                </div>

            </form>
        </div>
    </div>
@endsection

<style>

</style>
