<script setup>

import filters from '@/components/filters/filters.vue';
import {inject, onMounted, provide, ref} from "vue";
import ListProducts from "@/components/products/listProducts.vue";

//const filtersInputs = "data-url-filters"

const lang = ref({})

lang.value.oceans = "oceany";
lang.value.yachts = "Jachty";
lang.value.filters = "Filtry";
lang.value.filtred = "Filtruj";
lang.value.dateRange = "Podaj zakres dat";
lang.value.startDay = "Początkowa data";
lang.value.endDay = "Końcowa data";


provide('language', lang);
</script>

<template>
    <div class="d-flex justify-content-between align-items-start">

        <filters />
        <list-products />

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
