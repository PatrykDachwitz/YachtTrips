<script setup>

import {inject, ref, watch} from 'vue';
import {getUrlByDataSetName, useFetch} from "@/primary_function/useFetch.js";
import FilterVariable from "@/components/filters/filterVariable.vue";

const oceansUrl = ref(getUrlByDataSetName('data-url-filters-oceans'));
const yachtsUrl = ref(getUrlByDataSetName('data-url-filters-yachts'));

const { data: oceans } = useFetch(oceansUrl);
const { data: yachts } = useFetch(yachtsUrl);

const lang = inject('lang');
const urlApi = inject('urlApi');
const products = inject('products');
function updateUrlApi() {
    const formController = document.querySelector('form[data-form-files]');
    const formInputs = new FormData(formController);
    const searchParams = new URLSearchParams(formInputs);

    urlApi.value = `${products.value.path}?page=${products.value.current_page}&${searchParams.toString()}`;
}

watch(oceans, () => {
    const loadingPage = document.querySelector('div.loading-page');
    setTimeout(()=> {
        loadingPage.parentElement.removeChild(loadingPage);
    }, 100);
});

</script>

<template>
    <form class="filters  d-flex justify-content-center rounded-2 overflow-hidden d-none d-lg-block" data-form-files>
        <div class="position-static bg-gray shadow p-4 m-3 m-xxl-4">
            <h2 class="fs-3">{{ lang['filters'] }}</h2>
            <hr />

            <template v-if="oceans !== null">
                <h4 class="fs-4">{{ lang['oceans'] }}</h4>

                <filter-variable :variables="oceans" nameInput="oceans" />
            </template>

            <template v-if="yachts !== null">
                <h4 class="fs-4">{{ lang['yachts'] }}</h4>

                <filter-variable :variables="yachts" nameInput="yachts" />
            </template>

            <h4 class="fs-4">{{ lang['dateRange'] }}</h4>
            <div>
                <div class="col-12">
                    <label for="start_day" class="form-label mb-0">{{ lang['startDay'] }}</label>
                    <input type="text" class="form-control" id="created_at" name="start_day">
                </div>
                <hr class="my-2"/>
                <div class="col-12">
                    <label for="end_day" class="form-label mb-0">{{ lang['endDay'] }}</label>
                    <input type="text" class="form-control" id="end_day" name="end_day">
                </div>
            </div>

            <div class="mt-3 w-100">
                <a class="btn btn-outline-dark w-100" @click="updateUrlApi">
                    {{ lang['filtred'] }}
                </a>
            </div>

        </div>
    </form>
</template>

<style scoped>

</style>
