<script setup>

import {Filters} from "@/primary_function/filters.js";
import {ref} from "vue";

const filtersInputs = "data-url-filters"

const filters = ref(new Filters(filtersInputs));
filters.value.getFilters();
</script>

<template>
    <div class="d-flex justify-content-between">
        <div class="filters  d-flex justify-content-center rounded-2 overflow-hidden d-none d-lg-block">
            <div class="position-static bg-gray shadow p-4 m-3 m-xxl-4">
                <h2 class="fs-3">Filtry</h2>
                <hr />
                <h4 class="fs-4">Oceany</h4>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Ocean antlatycki
                        </label>
                    </div>
                </div>
                <h4 class="fs-4">Oceany</h4>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Ocean antlatycki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Ocean antlatycki
                        </label>
                    </div>
                </div>
                <h4 class="fs-4">Oceany</h4>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Ocean antlatycki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Ocean antlatycki
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="contents row contents-proucts g-3 mb-3 mx-2 mx-lg-4"><div class="col-6 col-md-4 col-lg-3 col-xxl-2">
            <div class=" shadow rounded-2 overflow-hidden shadow-sm">

                <div>
                    <picture>
                        <img src="http://127.0.0.1/slide1.jpg" width="245" height="150" class="w-100"/>
                    </picture>
                </div>

                <div class="p-2 d-flex ocean-content flex-column justify-content-between">
                    <p class="fs-5 mb-0">
                        Nazwa
                    </p>
                    <div class="w-100 d-flex justify-content-end fs-6 align-items-center">
                        Cena od&nbsp;<strong>100 zł</strong>
                        <hr />
                        <a class="ms-2 btn fs-6 btn-dark">@lang('travels.check')</a>
                    </div>
                </div>

            </div>
        </div></div>
    </div>
</template>

<style scoped>
.filters {
    @media only screen and (min-width: 992px) and (max-width: 1600px) {
        flex: 20% 0;
    }
    @media only screen and (max-width: 992px) {
        flex: 0;
    }
    @media only screen and (min-width: 1600px) {
        flex: 15% 0;
    }
}

.contents-proucts {
    flex: 1;
}
</style>
