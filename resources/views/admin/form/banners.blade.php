<form class="row g-3 p-3 d-none " data-show-form>
<div class="col-md-10">
        <label for="validationCustom02" class="form-label">@lang('admin.name')</label>
        <input type="email" class="form-control" id="validationCustom02" name="name" data-form-main>
    </div>

    <div class="col-md-2">
        <label for="validationCustom03" class="form-label">@lang('admin.active')</label>
        <select class="form-select" name="active" aria-label="Default select example" id="validationCustom03" data-form-main>
            <option value="1">@lang('admin.yes')</option>
            <option value="0">@lang('admin.no')</option>
        </select>
    </div>

    <div class="col-md-4">
        <label for="start_at" class="form-label">@lang('admin.startView')</label>
        <div class="position-relative">
            <input type="text" class="form-control" id="created_at" name="start_at"  data-form-main>
            <picture>
                <source srcset="/files/icons/calendar.webp" type="image/webp"/>
                <img src="/files/icons/calendar.png" width="25" height="25" class="position-absolute  top-0 end-0 mt-1 me-2" data-calendar-input="start_at"/>
            </picture>
        </div>
    </div>
    <div class="col-md-4">
        <label for="finish_at" class="form-label">@lang('admin.endView')</label>
        <div class="position-relative">
            <input type="text" class="form-control" id="created_at" name="finish_at"  data-form-main>
            <picture>
                <source srcset="/files/icons/calendar.webp" type="image/webp"/>
                <img src="/files/icons/calendar.png" width="25" height="25" class="position-absolute  top-0 end-0 mt-1 me-2" data-calendar-input="finish_at"/>
            </picture>
        </div>
    </div>

    @csrf

    <div class="col-md-4">
        <label for="category_banner_id" class="form-label">@lang('admin.active')</label>
        <select class="form-select" name="category_banner_id" data-form-main>
            @foreach($categoryBanners as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
</form>
