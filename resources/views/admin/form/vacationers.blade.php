<form class="row g-3 p-3 d-none" data-show-form>
    <div class="col-md-6">
        <label for="first_name" class="form-label">@lang('admin.personal_first_name')</label>
        <input type="text" class="form-control" id="first_name" name="first_name" data-form-main>
    </div>

    <div class="col-md-6">
        <label for="last_name" class="form-label">@lang('admin.personal_last_name')</label>
        <input type="text" class="form-control" id="last_name" name="last_name" data-form-main>
    </div>

    <div class="col-md-4">
        <label for="age" class="form-label">@lang('admin.age')</label>
        <select class="form-select" name="age" aria-label="age" id="age" data-form-main>
            <option value="adult">@lang('admin.adult')</option>
            <option value="kid">@lang('admin.kid')</option>
        </select>
    </div>

    <div class="col-md-3">
        <label for="book_id" class="form-label">@lang('admin.bookingId')</label>
        <input type="number" class="form-control" id="book_id" name="book_id" data-form-main>
    </div>

    @csrf
</form>
