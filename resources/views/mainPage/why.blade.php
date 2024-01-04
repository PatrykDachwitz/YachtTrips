<div class="bg-gray pt-3 pt-xl-0 d-flex justify-content-center">
    <div style="max-width: 1920px" class="d-flex flex-column">

        <div class="d-flex flex-column flex-xl-row">
            <div class="d-flex justify-content-center w-xl-50 p-4 align-items-center">
                <picture>
                    @foreach($content->bannersActive[0]->images ?? [] as $image)
                        @switch($image->pivot->device)
                            @case('mobile')
                                <source media="(max-width: 1200px)" srcset='{{ "{$image->path}/{$image->name}.webp" }}' type="image/webp" width="700" height="445"/>
                                <source media="(max-width: 1200px)" srcset='{{ "{$image->path}/{$image->name}.{$image->extension}" }}' width="700" height="445"/>
                                @break
                            @case('pc')
                                <source srcset='{{ "{$image->path}/{$image->name}.webp" }}' media="(min-width: 1200spx)" type="image/webp"/>
                                <img srcset='{{ "{$image->path}/{$image->name}.{$image->extension}" }}' src='{{ "{$image->path}/{$image->name}.{$image->extension}" }}' class="img-fluid rounded-2 overflow-hidden border-grayLight-1" width="950" height="550" alt="{{ $content->description }}"/>
                                @break
                        @endswitch
                    @endforeach
                </picture>
            </div>
            <div class="d-flex flex-column w-xl-50 justify-content-xl-center">
                <h2 class="fs-3 d-flex justify-content-center justify-content-xl-start ps-3"><b>{{ $content->bannersActive[0]->name ?? "" }}</b></h2>
                <div class="p-3 px-4 fs-5">
                    {!! $content->bannersActive[0]->description ?? "" !!}
                </div>
            </div>
        </div>

    </div>
</div>











