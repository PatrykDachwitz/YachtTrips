<script setup>
import {inject} from "vue";

defineProps([
    'product'
]);

const lang = inject('lang')
</script>

<template>
    <div class="shadow-sm d-flex justify-content-between align-items-center border-grayLight-1 p-2 overflow-hidden rounded-2 mb-2">
        <div class="rounded-2 overflow-hidden">
            <picture>
                <img src="http://127.0.0.1/slide1.jpg" width="245" height="150" />
            </picture>
        </div>
        <div class="d-flex flex-column flex-xxl-row align-items-start justify-content-evenly w-100 px-3 align-items-xxl-center">
            <div>
                {{ lang['deadline'] }}:&nbsp;<strong>{{ product.trips.start_travel }} - {{ product.trips.end_travel }}</strong>
            </div>
            <div>
                {{ lang['numberRoom'] }}:&nbsp;<strong>{{ product.number_room }}</strong>
            </div>
            <div>
                {{ lang['countPeople'] }}:&nbsp;<strong>{{ product.count_adult }} ({{ lang['adults'] }}), {{ product.count_kids }} ({{ lang['kid'] }})</strong>
            </div>

            <div>
                {{ lang['price'] }}:&nbsp;&nbsp<strong>{{ product.price }} zł</strong>
            </div>
        </div>
        <div class="btn btn-danger">
            {{ lang['delete'] }}
        </div>
    </div>
</template>

<style scoped>

</style>
