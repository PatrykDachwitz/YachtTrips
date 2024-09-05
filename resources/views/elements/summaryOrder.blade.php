<div v-if="order !== null" class="bg-gray rounded-2 overflow-hidden shadow-sm p-3 border-grayLight-1 d-flex flex-column align-items-center align-items-lg-start">
    <span class="fs-3"><strong>@lang('pages.summary')</strong></span>
    <hr class="my-1 hr"/>
    <div class="d-none d-lg-block">
        <span class="fs-5">@lang('pages.products')</span>

        <ul class="list-unstyled fs-6 my-1">
            @foreach($order->books as $book)
                <li>{{ $book->trips->name }}:&nbsp;<strong>{{ $book->price }} zł</strong></li>
            @endforeach
        </ul>
        <span class="fs-5 mb-0">@lang('pages.summaryProducts'):&nbsp;<strong>{{ $order->price }} zł</strong></span>
    </div>

    <hr class="mt-1 mb-2 hr"/>

    <div class="d-flex flex-column w-100">
        @if(isset($url['back']))
            <a href="{{ $url['back'] }}" class="btn btn-outline-dark fs-6 mb-1">
                @lang('pages.previous')
            </a>
        @endif

        @if(isset($url['next']))
            <button class="btn btn-dark fs-6">
                <b>@lang('pages.next')</b>
            </button>
        @endif

    </div>

</div>
