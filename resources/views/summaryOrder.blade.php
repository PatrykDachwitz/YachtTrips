@extends('pages')

@section('content')

    <section class="d-flex justify-content-center align-items-center" style="margin-top: 150px">
        <div class="bg-gray shadow p-5">
            <div>
                <h1 class="fs-2">@lang('pages.summaryPayment')</h1>
                <hr />
                <ul class="list-unstyled d-flex justify-content-center flex-column">{{ dd($order->status()->name) }}
                    <li class="d-flex w-100 justify-content-between"><strong>@lang('pages.summaryPayment')</strong> <span>@lang(`pages.{$order->status}`)</span></li>
                    <li class="d-flex w-100 justify-content-between"><strong>@lang('pages.statusOrder')</strong> <span>#{{ $order->number }}</span></li>
                    <li class="d-flex w-100 justify-content-between"><strong>@lang('pages.price')</strong> <span>{{ $order->price }} zł</span></li>
                </ul>
                <a class="btn btn-success w-100" href="">@lang('pages.goToPayment')</a>
            </div>
            <div class="mt-3 flex-column">
                @foreach($order->books as $book)
                    <div>
                        <div>
                            <picture>
                                <source srcset="{{ $book->trips->link_webp }}" type="image/webp">
                                <img src="{{ $book->trips->link_image }}" />
                            </picture>
                        </div>
                        <div>
                            {{ $book->trips->name }}
                        </div>
                        <div>
                            {{ "{$book->price} zł" }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
