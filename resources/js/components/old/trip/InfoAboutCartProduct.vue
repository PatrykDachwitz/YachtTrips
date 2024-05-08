<script setup>
import {inject} from "vue";

const lang = inject('lang');
const tripDetail = inject('tripDetail');
</script>

<template>
    <div class="d-flex justify-content-between align-items-center p-2 overflow-hidden rounded-2 mb-2">
        <div class="rounded-2 overflow-hidden">
            <picture>
                <source :srcset="tripDetail.trip.images[0].link_webp" type="image/webp"/>
                <img :src="tripDetail.trip.images[0].link_image" width="245" height="150" />
            </picture>
        </div>
        <div>
            <div>
                <strong class="px-3 fs-4">{{ tripDetail.trip.name }}</strong>
            </div>
            <div class="d-flex flex-column flex-xxl-row align-items-start justify-content-evenly w-100 px-3 align-items-xxl-center">
                <div>
                    {{ lang['deadline'] }}:&nbsp;<strong>{{ tripDetail.trip.start_travel  }} - {{ tripDetail.trip.end_travel }}</strong>
                </div>
                <div>
                    {{ lang['numberRoom'] }}:&nbsp;<strong>{{ tripDetail.number_room }}</strong>
                </div>
                <div>
                    {{ lang['countPeople'] }}:&nbsp;<strong>{{ tripDetail.count_adult }} ({{ lang['adults'] }}), {{ tripDetail.count_kids }} ({{ lang['kid'] }})</strong>
                </div>

                <div>
                    {{ lang['price'] }}:&nbsp;&nbsp<strong>{{ tripDetail.price }} zł</strong>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
