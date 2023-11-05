<form class="row g-3 p-3 d-none" data-show-form>
    <div class="col-md-10">
        <label for="inputEmail4" class="form-label">@lang('admin.name')</label>
        <input type="email" class="form-control" id="inputEmail4" name="name">
    </div>

    <div class="col-md-2">
        <label for="inputPassword4" class="form-label">@lang('admin.active')</label>
        <select class="form-select" name="active" aria-label="Default select example">
            <option value="1">@lang('admin.yes')</option>
            <option value="0">@lang('admin.no')</option>
        </select>
    </div>

    <div class="col-md-4">
        <label for="start_at" class="form-label">@lang('admin.startView')</label>
        <input type="text" class="form-control" id="created_at" name="start_at">
    </div>
    <div class="col-md-4">
        <label for="finish_at" class="form-label">@lang('admin.endView')</label>
        <input type="text" class="form-control" id="created_at" name="finish_at">
    </div>


    <div class="col-md-4">
        <label for="category_banner_id" class="form-label">@lang('admin.active')</label>
        <select class="form-select" name="category_banner_id">
            @foreach($categoryBanners as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>


</form>
