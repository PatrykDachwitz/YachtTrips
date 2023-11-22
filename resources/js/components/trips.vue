<script setup>

import filters from '@/components/filters/filters.vue';
import {inject, provide, ref} from "vue";
import Calendar from "@/components/calendar.vue";

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
    <div class="d-flex justify-content-between">
        <calendar/>

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
