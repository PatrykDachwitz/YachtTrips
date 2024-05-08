<script setup>

import filters from '@/components/filters/filters.vue';
import {inject, onMounted, provide, ref} from "vue";
import ListProducts from "@/components/products/listProducts.vue";
import Calendar from "@/admin/components/bannerShow.vue";
import calendar from "@/components/calendar.vue";
import emptySupport from "@/admin/components/emptySupport.vue";

//const filtersInputs = "data-url-filters"

const activeCalendar = ref('emptySupport');
const locationDataSet = ref(null);

provide('activeCalendar', activeCalendar);
provide('locationDataSet', locationDataSet);

const supportComponent = {
    calendar,
    emptySupport
}

function runCalendar() {
    const calendarInputs = document.querySelectorAll('[data-calendar-input]');

    calendarInputs.forEach(calendarInput => {
        calendarInput.addEventListener('click', () => {
            if (activeCalendar.value === "calendar") {
                activeCalendar.value = "emptySupport";
            } else {
                activeCalendar.value = "calendar";
                locationDataSet.value = calendarInput.dataset.calendarInput;
            }
        })
    });
}

onMounted(() => {
    runCalendar();
})


</script>

<template>
    <component :is="supportComponent[activeCalendar]" :locationByDataSet="locationDataSet"> </component>
    <div class="d-flex justify-content-between align-items-start">

        <filters />
        <list-products />

    </div>
</template>

<style scoped>
.filters {
    flex: 0;
}

.contents-proucts {
    flex: 1;
}
@media only screen and (min-width: 992px) {
    .filters {
        flex: 320px 0;
    }
}
</style>


