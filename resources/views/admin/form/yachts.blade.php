<form class="row g-3 p-3 d-none" data-show-form>
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">@lang('admin.name')</label>
        <input type="email" class="form-control" id="inputEmail4" name="name" data-form-main>
    </div>

    @csrf

    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">@lang('admin.availablePlace')</label>
        <input type="email" class="form-control" id="inputEmail4" name="places_available" data-form-main>
    </div>

</form>
