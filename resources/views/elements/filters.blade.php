<form class="filters d-flex justify-content-center rounded-2 overflow-hidden d-none d-lg-block" method="GET" data-form-files>
    <div class="filters__content bg-gray shadow p-4 m-3 m-xxl-4">
        <h2 class="fs-3">@lang('travels.filters')</h2>
        <hr />

        @foreach($filters ?? [] as $filter)
            <h4 class="fs-4">@lang("travels.{$filter['name']}")</h4>

            <div>
                @foreach($filter['options'] ?? [] as $option)
                    <div class="form-check @if($loop->index > 3) d-none @else d-false @endif" >
                        <input class="form-check-input" type="checkbox" value="{{ $option->id }}" name="{{ $filter['nameInput'] }}[]" data-ocean-id="{{ $option->id }}">
                        <label class="form-check-label" data-ocean-id="{{ $option->id }}">{{ $option->name }}</label>
                    </div>
                @endforeach

                <div class="text-center fs-5 text-dark pointer" v-if="variables.length > 4 && optionExpansion !== true" @click="optionExpansion = true">@lang('travels.optionsExpansion')</div>
                <div class="text-center fs-5 text-dark pointer" v-if="variables.length > 4 && optionExpansion === true" @click="optionExpansion = false">@lang('travels.optionsNotExpansion')</div>
                <hr class="hr"/>
            </div>
        @endforeach

        <h4 class="fs-4">@lang('travels.dateRange')</h4>
        <div>
            <div class="col-12">
                <label for="start_day" class="form-label mb-0">@lang('travels.endDay')</label>
                <div class="position-relative">
                    <input type="date" class="form-control" id="start_day" name="start_day"  data-form-main>
                </div>
            </div>
            <hr class="my-2"/>
            <div class="col-12">
                <label for="end_day" class="form-label mb-0">@lang('travels.endDay')</label>
                <div class="position-relative">
                    <input type="date" class="form-control" id="end_day" name="end_day"  data-form-main>
                </div>
            </div>
        </div>

        <div class="mt-3 w-100">
            <button class="btn btn-outline-dark w-100">@lang('travels.filtred')</button>
        </div>

    </div>
</form>
