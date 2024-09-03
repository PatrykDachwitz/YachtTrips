<div class="w-100 max-lg-75 text-start">
    <h2 class="fs-1 mb-3">{{ $trip->name }}</h2>
</div>
<div class="row w-100 max-lg-75 bg-gray p-3 shadow-sm overflow-hidden rounded-2 g-2">

    <div class="col-md-6">
        <label for="oceans" class="form-label">@lang('travels.ocean')</label>
        <input class="form-control" type="text" id="oceans" value="{{ $trip->oceans->name }}" readonly/>
    </div>
    <div class="col-md-6">
        <label for="yachts" class="form-label">@lang('travels.yacht')</label>
        <input class="form-control" type="text" id="yachts" value="{{ $trip->yachts->name }}" readonly/>
    </div>
    <div class="col-md-6">
        <label for="start_day" class="form-label">@lang('travels.startDayTravel')</label>
        <input class="form-control" type="text" id="start_day" value="{{ $trip->start_travel }}" readonly/>
    </div>
    <div class="col-md-6">
        <label for="end_day" class="form-label">@lang('travels.endDayTravel')</label>
        <input class="form-control" type="text" id="end_day" value="{{ $trip->end_travel }}" readonly/>
    </div>

</div>

<div class="row w-100 max-lg-75 bg-gray p-3 shadow-sm overflow-hidden rounded-2 g-2 my-3">
    <div class="col-md-6">
        <label for="rooms_active_max_adults" class="form-label">@lang('travels.countAdult')</label>
        <select class="form-select" name="rooms_active_max_adults" id="rooms_active_max_adults" data-form-main>
            <option value="number" selected="{{ $number = 1 }}">{{ $number }}</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="rooms_active_max_kids" class="form-label">@lang('travels.countChild')</label>
        <select class="form-select" name="rooms_active_max_kids" id="rooms_active_max_kids" data-form-main>
            <option value="0" selected>0</option>
            <option value="number">{{ $number }}</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="rooms_active_max_double_beds" class="form-label">@lang('travels.countDoubleBeds')</label>
        <select class="form-select" name="rooms_active_max_double_beds" id="rooms_active_max_double_beds" data-form-main>
            <option value="0" selected>0</option>
            <option value="number">{{ $number }}</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="rooms_active_max_single_beds" class="form-label">@lang('travels.countSingleBeds')</label>
        <select class="form-select" name="rooms_active_max_single_beds" id="rooms_active_max_single_beds" data-form-main>
            <option value="0">0</option>

            <option value="number">{{ $number }}</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="rooms_active_max_kids_beds" class="form-label">@lang('travels.countKidsBeds')</label>
        <select class="form-select" name="rooms_active_max_kids_beds" id="rooms_active_max_kids_beds" data-form-main>
            <option value="0" selected>0</option>
            <option value="number">{{ $number }}</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="rooms_active_max_premium" class="form-label">@lang('travels.premiumRoom')</label>
        <select class="form-select" name="rooms_active_max_premium" id="rooms_active_max_premium" data-form-main>
            <option value="0" selected>@lang('travels.no')</option>
            <option value="number">{{ $number }}</option>
        </select>
    </div>
</div>
