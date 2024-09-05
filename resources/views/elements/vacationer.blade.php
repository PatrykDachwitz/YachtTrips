<div class="d-flex align-items-center justify-content-between border-top-grayLight-1 py-2 px-5" style="min-width: 100%;">
    <div>
        @lang('pages.personal'):&nbsp;<strong>@lang("pages.{$vacationer->age}")</strong>
    </div>
    <input type="hidden" name='id[{{ $vacationer->id }}]' value="{{ $vacationer->id }}" />
    <div class="d-flex align-items-center mx-5 flex-column">
        <div class="d-flex flex-column align-items-start ms-2">
            <div class="d-flex align-items-center">
                <label for="firstName" class="form-label m-0 p-0"><span>@lang('pages.firstName'):&nbsp;</span></label>
                <input type="text" class='form-control @error("first_name.{$vacationer->id}") is-invalid @enderror' id="firstName" name='first_name[{{ $vacationer->id }}]' placeholder="@lang('pages.firstNameFake')" value="{{ old("first_name.{$vacationer->id}", $vacationer->first_name ?? '') }}" >
            </div>
            @error("first_name.{$vacationer->id}")
            <div class="invalid-feedback d-flex">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="d-flex align-items-center ms-2 flex-column">
        <div class="d-flex flex-column align-items-start ms-2">
            <div class="d-flex align-items-center">
                <label for="lastName" class="form-label m-0 p-0">@lang('pages.lastName'):&nbsp;</label>
                <input type="text" class='form-control @error("last_name.{$vacationer->id}") is-invalid @enderror' id="lastName" name='last_name[{{ $vacationer->id }}]' placeholder="@lang('pages.lastNameFake')" value="{{ old("last_name.{$vacationer->id}", $vacationer->last_name ?? '') }}" >
            </div>
            @error("last_name.{$vacationer->id}")
            <div class="invalid-feedback d-flex">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>
