@extends('pages.cart.layout', [
    'order' => $order,
    'url' => [
        'back' => route('cart.index'),
        'next' => route('cart.vacationers')
    ]
])


@section('content')

    <div class="border-grayLight-1 rounded-2 p-3 shadow-sm mb-4">
        <span class="fs-2"><b>@lang('pages.personalDataContact')</b></span>

        <div class="row g-3">
            <div class="col-md-6">
                <label for="personal_first_name" class="form-label">@lang('pages.firstName')*</label>
                <input type="text" class="form-control" id="personal_first_name" name='personal_first_name' placeholder="@lang('pages.firstNameFake')" value="{{ old('personal_first_name', $order->personal_first_name ?? '') }}" required>
            </div>
            <div class="col-md-6">
                <label for="personal_last_name" class="form-label">@lang('pages.lastName')*</label>
                <input type="text" class="form-control" value="{{ old('personal_last_name', $order->personal_last_name ?? '') }}" id="personal_last_name" name='personal_last_name' placeholder="@lang('pages.lastNameFake')" required>
            </div>

            <div class="col-md-6">
                <label for="personal_mail" class="form-label">@lang('pages.email')*</label>
                <input type="text" value="{{ old('personal_mail', $order->personal_mail ?? '') }}" class="form-control" id="personal_mail" name='personal_mail' placeholder="@lang('pages.emailFake')" required>
            </div>
            <div class="col-md-6">
                <label for="personal_phone" class="form-label">@lang('pages.numberPhone')*</label>
                <input type="text" value="{{ old('personal_phone', $order->personal_phone ?? '') }}" class="form-control" id="personal_phone" name='personal_phone' placeholder="@lang('pages.numberPhoneFake')" required>
            </div>

            <div class="col-md-12">
                <label for="address" class="form-label">@lang('pages.correspondenceAddress')*</label>
                <input value="{{ old('address', $order->address ?? '') }}" type="text" class="form-control" id="address" name='address' placeholder="@lang('pages.streetFake')" required>
            </div>


            <div class="col-12">
                <label for="additional_content" class="form-label">@lang('pages.additionalContent')</label>
                <textarea class="form-control" id="additional_content" name='additional_content' placeholder="@lang('pages.additionalContentFake')">{{ old('additional_content', $order->additional_content ?? '') }}</textarea>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" name="checked_rule" value="1" type="checkbox" id="flexCheckDefault" required @checked(old("checked_rule", $order->checked_rule))>
                    <label class="form-check-label" for="flexCheckDefault">@lang('pages.checkedRules')*</label>
                </div>
            </div>
            <div class="fs-6 mt-2">@lang('pages.requiredInput')</div>

        </div>
    </div>

@endsection
