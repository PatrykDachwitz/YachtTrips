@extends('pages')

@section('content')

    <section class="d-flex justify-content-center align-items-center flex-column" style="margin-top: 150px">
        <div class="bg-gray shadow p-5 ">
            <div>
                <h1 class="fs-2">@lang('pages.summaryPayment')</h1>
                <ul class="list-unstyled d-flex justify-content-center flex-column">
                    <li class="d-flex w-100 justify-content-between"><strong>@lang('pages.summaryPayment')</strong> <strong>@lang("pages.{$order->statusOrder->name}")</strong></li>
                    <li class="d-flex w-100 justify-content-between"><strong>@lang('pages.statusOrder')</strong> <strong>#{{ $order->number }}</strong></li>
                    <li class="d-flex w-100 justify-content-between"><strong>@lang('pages.price')</strong> <strong>{{ $order->price }} zł</strong></li>
                </ul>
            </div>
            <hr />
            <div>
                <h2>@lang('pages.makeTransfer')</h2>
                <ul class="list-unstyled d-flex justify-content-center flex-column">
                    <li class="d-flex w-100 justify-content-between"><strong>@lang('pages.recipient')</strong> <span>wycieczki-na-jachcie.pl</span></li>
                    <li class="d-flex w-100 justify-content-between"><strong>@lang('pages.numberAccountBank')</strong> <span>1234 1234 1234 1234</span></li>
                    <li class="d-flex w-100 justify-content-between"><strong>@lang('pages.titlePayment')</strong> <span>@lang('pages.numberOrder'): {{ $order->number }}</span></li>
                </ul>
            </div>
            <hr />
            <div class="mt-3 flex-column">
                @foreach($order->books as $book)
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <picture>
                                <source srcset="{{ $book->trips->imagesCategory[0]->link_webp }}" type="image/webp">
                                <img src="{{ $book->trips->imagesCategory[0]->link_image }}" class="rounded-2" />
                            </picture>
                        </div>
                        <div class="fs-5 ms-2 d-flex flex-column">
                            {{ $book->trips->name }}
                            <strong class="fs-5">@lang('pages.price'): {{ "{$book->price} zł" }}</strong>
                        </div>
                        <div>

                        </div>
                    </div>
                    <hr />
                @endforeach
            </div>
        </div>
    </section>

@endsection
