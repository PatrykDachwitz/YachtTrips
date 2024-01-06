<form class="row g-3 p-3 d-none" data-show-form>
    <div class="col-md-12">
        <label for="inputEmail4" class="form-label">@lang('admin.name')</label>
        <input type="email" class="form-control" id="inputEmail4" name="name" data-form-main>
    </div>

    @csrf

    <div class="col-md-4">
        <label for="start_day" class="form-label">@lang('admin.startDay')</label>
        <div class="position-relative">
            <input type="text" class="form-control" id="created_at" name="start_day" style="background-position: right calc(2.4em + 0.1875rem) center;"  data-form-main>
            <picture>
                <source srcset="/files/icons/calendar.webp" type="image/webp"/>
                <img src="/files/icons/calendar.png" width="25" height="25" class="position-absolute  top-0 end-0 mt-1 me-2 calendars-input"   data-calendar-input="start_day"/>
            </picture>
        </div>
    </div>

    <div class="col-md-4">
        <label for="end_day" class="form-label">@lang('admin.endDay')</label>
        <div class="position-relative">
            <input type="text" class="form-control" id="created_at" name="end_day" style="background-position: right calc(2.4em + 0.1875rem) center;"  data-form-main>
            <picture>
                <source srcset="/files/icons/calendar.webp" type="image/webp"/>
                <img src="/files/icons/calendar.png" width="25" height="25" class="position-absolute  top-0 end-0 mt-1 me-2 calendars-input"   data-calendar-input="end_day"/>
            </picture>
        </div>
    </div>

    <div class="col-md-4">
        <label for="count_day" class="form-label">@lang('admin.countDay')</label>
        <input type="text" class="form-control" id="count_day" name="count_day" data-form-main>
    </div>


    <div class="col-md-4">
        <label for="ocean_id" class="form-label">@lang('admin.ocean')</label>
        <select class="form-select" name="ocean_id" data-form-main>
            @foreach($oceans as $ocean)
                <option value="{{ $ocean->id }}">{{ $ocean->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-4">
        <label for="yacht_id" class="form-label">@lang('admin.yacht')</label>
        <select class="form-select" name="yacht_id" data-form-main>
            @foreach($yachts as $yacht)
                <option value="{{ $yacht->id }}">{{ $yacht->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-4">
        <label for="template_id" class="form-label">@lang('admin.template')</label>
        <select class="form-select" name="template_id" data-form-main>
            @foreach($templates as $template)
                <option value="{{ $template->id }}">{{ $template->name }}</option>
            @endforeach
        </select>
    </div>


</form>
