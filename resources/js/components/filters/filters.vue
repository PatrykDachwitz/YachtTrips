<script setup>

import {inject, onMounted, ref, watch} from 'vue';
import {getUrlByDataSetName, useFetch} from "@/primary_function/useFetch.js";
import FilterVariable from "@/components/filters/filterVariable.vue";
import {Filters} from "@/primary_function/filters/filters.js";

const oceansUrl = ref(getUrlByDataSetName('data-url-filters-oceans'));
const yachtsUrl = ref(getUrlByDataSetName('data-url-filters-yachts'));

const { data: oceans } = useFetch(oceansUrl);
const { data: yachts } = useFetch(yachtsUrl);

const lang = inject('lang');
const urlApi = inject('urlApi');
const products = inject('products');
const filters = ref(null);


watch(oceans, () => {
    const loadingPage = document.querySelector('div.loading-page');
    setTimeout(()=> {
        loadingPage.parentElement.removeChild(loadingPage);
    }, 100);
});

onMounted(() => {
    filters.value = new Filters('data-form-files', urlApi.value);
});
function updateParamsFilter() {
    urlApi.value = filters.value.getUpdateUrl();
}

</script>

<template>
    <form class="filters  d-flex justify-content-center rounded-2 overflow-hidden d-none d-lg-block" data-form-files>
        <div class="position-static bg-gray shadow p-4 m-3 m-xxl-4">
            <h2 class="fs-3">{{ lang['filters'] }}</h2>
            <hr />

            <template v-if="oceans !== null">
                <h4 class="fs-4">{{ lang['oceans'] }}</h4>

                <filter-variable :variables="oceans.data" nameInput="ocean_id" />
            </template>

            <template v-if="yachts !== null">
                <h4 class="fs-4">{{ lang['yachts'] }}</h4>

                <filter-variable :variables="yachts.data" nameInput="yacht_id" />
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
                <a class="btn btn-outline-dark w-100" @click="updateParamsFilter">
                    {{ lang['filtred'] }}
                </a>
            </div>

        </div>
    </form>
</template>

<style scoped>

</style>
