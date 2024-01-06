<form class="row g-3 p-3 d-none " data-show-form>
    <div class="col-md-6">
        <label for="validationCustom02" class="form-label">@lang('admin.name')</label>
        <input type="text" class="form-control" id="validationCustom02" name="name" data-form-main>
    </div>

    <div class="col-md-6">
        <label for="validationCustom02" class="form-label">@lang('admin.email')</label>
        <input type="email" class="form-control" id="validationCustom02" name="email" data-form-main>
    </div>


    <div class="col-md-6">
        <label for="validationCustom02" class="form-label">@lang('admin.password')</label>
        <input type="password" class="form-control" id="validationCustom02" name="password" placeholder="******" data-form-main>
    </div>

    <div class="col-md-6">
        <label for="validationCustom02" class="form-label">@lang('admin.passwordConfirmed')</label>
        <input type="password" class="form-control" id="validationCustom02" name="password_confirmation" placeholder="******" data-form-main>
    </div>

    <div class="col-md-3">
        <label for="validationCustom02" class="form-label">@lang('admin.security')</label>
        <input type="text" class="form-control" id="validationCustom02" name="security" data-form-main>
    </div>

    <div class="col-md-3">
        <label for="validationCustom02" class="form-label">@lang('admin.superAdmin')</label>
        <select class="form-select" name="super_admin" data-form-main>
            <option value="0" selected>@lang('admin.no')</option>
            <option value="1">@lang('admin.yes')</option>
        </select>
    </div>


</form>
