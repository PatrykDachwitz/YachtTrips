@extends('pages.cart.layout', [
    'order' => $order
])


@section('content')

    <div class="border-grayLight-1 rounded-2 p-3 shadow-sm mb-4">

        <span class="fs-2"><strong>@lang('pages.payment')</strong></span>
        <div class="d-flex flex-column mt-3">

            @foreach($payments as $payment)
                <div class="  d-flex justify-content-between align-items-center p-3 mb-2 rounded-2 border-grayLight-1">
                    <div class="rounded-2 overflow-hidden">
                        <picture>
                            <img src="http://127.0.0.1/slide1.jpg" width="120" height="75" />
                        </picture>
                    </div>
                    <div class="d-flex text-start w-100 px-3 align-items-center">
                        <b class="fs-4">{{ $payment->name }}</b>
                    </div>
                    <div class="btn btn-outline-dark">@lang('pages.selected')</div>
                </div>
            @endforeach

        </div>

    </div>

@endsection
