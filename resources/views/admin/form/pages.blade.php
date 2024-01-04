<form class="row g-3 p-3 d-none " data-show-form>
    <div class="col-md-6">
        <label for="validationCustom02" class="form-label">@lang('admin.name')</label>
        <input type="email" class="form-control" id="validationCustom02" name="name" data-form-main>
    </div>

    <div class="col-md-6">
        <label for="validationCustom02" class="form-label">@lang('admin.slug')</label>
        <input type="text" class="form-control" id="validationCustom02" name="slug" data-form-main>
    </div>

    <div class="col-md-2">
        <label for="validationCustom03" class="form-label">@lang('admin.active')</label>
        <select class="form-select" name="active" aria-label="Default select example" id="validationCustom03" data-form-main>
            <option value="1">@lang('admin.yes')</option>
            <option value="0">@lang('admin.no')</option>
        </select>
    </div>

</form>
