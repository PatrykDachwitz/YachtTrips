<form class="row g-3 p-3 d-none " data-show-form>

    <div class="col-md-6">
        <label for="name" class="form-label">@lang('admin.name')</label>
        <input type="text" class="form-control" id="name" name="name" data-form-main>
    </div>

    <div class="col-md-2">
        <label for="active" class="form-label">@lang('admin.active')</label>
        <select class="form-select" name="active" id="active" data-form-main>
            <option value="1">@lang('admin.yes')</option>
            <option value="0">@lang('admin.no')</option>
        </select>
    </div>

    <div class="col-md-6">
        <label for="type" class="form-label">@lang('admin.typePayment')</label>
        <input type="text" class="form-control" id="name" name="type" data-form-main>
    </div>




</form>
