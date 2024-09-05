@extends('pages.cart.layout', [
    'order' => $order,
    'url' => [
        'back' => route('cart.personalData'),
        'next' => route('cart.payments')
    ]
])


@section('content')

    <div class="border-grayLight-1 rounded-2 p-3 shadow-sm mb-4">

        <span class="fs-2"><b>@lang('pages.holidaysMarketsData')</b></span>

        <div class="d-flex flex-column mt-3">

            @foreach($order->books as $book)
                <input type="hidden" name="book_id[]" value="{{ $book->id }}">
                <div class="shadow-sm d-flex justify-content-center align-items-center border-grayLight-1 p-2 overflow-hidden rounded-2 mb-2 flex-column">
                    <div class="d-flex align-items-center">
                        <div class="btn-outline-dark fs-5 pointer"><b>&lt;</b></div>
                        <span class="fs-3 mx-3">{{ $book->trips->name }}</span>
                        <div class="btn-outline-dark fs-5 pointer"><b>></b></div>
                    </div>


                    @foreach($book->vacationers as $vacationer)
                        @include('elements.vacationer', [
                            'vacationer' => $vacationer,
                            'bookId' => $book->id
                        ])
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
    {{ dump($errors) }}
@endsection

