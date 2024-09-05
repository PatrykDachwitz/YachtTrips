@extends('pages.cart.layout', [
    'order' => $order,
    'url' => [
        'next' => route('cart.personalData')
    ]
])


@section('content')
    <div class="border-grayLight-1 rounded-2 p-3 shadow-sm mb-4">

        <span class="fs-2"><strong>@lang('pages.detailOrder')</strong></span>
        <div class="d-flex flex-column mt-3">
            @foreach($order->books ?? [] as $product)
                <div class="shadow-sm d-flex justify-content-between align-items-center border-grayLight-1 p-2 overflow-hidden rounded-2 mb-2">
                    <div class="rounded-2 overflow-hidden">
                        <picture>
                            <source srcset="{{ $product->trips->imagesCategory[0]->link_webp }}" type="image/webp"/>
                            <img src="{{ $product->trips->imagesCategory[0]->link_image  }}" width="245" height="150" />
                        </picture>
                    </div>
                    <div>
                        <div>
                            <strong class="px-3 fs-4">{{ $product->trips->name }}</strong>
                        </div>
                        <div class="d-flex flex-column flex-xxl-row align-items-start justify-content-evenly w-100 px-3 align-items-xxl-center">
                            <div>
                                @lang('pages.deadline'):&nbsp;<strong>{{ $product->trips->start_day }} - {{ $product->trips->end_day }}</strong>
                            </div>
                            <div>
                                @lang('pages.numberRoom'):&nbsp;<strong>{{ $product->number_room }}</strong>
                            </div>
                            <div>
                                @lang('pages.countPeople'):&nbsp;<strong>{{ $product->count_adult }} (@lang('pages.adults')), {{ $product->count_kids }} (@lang('pages.kid'))</strong>
                            </div>

                            <div>
                                @lang('pages.price'):&nbsp;<strong>{{ $product->price }} zł</strong>
                            </div>
                        </div>
                    </div>
                    <div class="btn btn-danger">@lang('pages.delete')</div>
                </div>
            @endforeach

        </div>

    </div>

@endsection
