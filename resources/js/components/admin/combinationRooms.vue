<script setup>

import {inject} from "vue";

const lang = inject('lang');
const data = inject("dataForm");

</script>

<template>
    <div v-if="data !== null">
        <RouterLink :to="{name: 'configurations', params: {id: data.id}}" class="btn btn-warning ms-4 mt-3 mb-1">Generuj dostepne kombinacje</RouterLink>

        <div v-if="data.combinations !== null">
            <template v-for="combination in data.combinations" :key="combination.id">
                <hr />
                <div class="d-flex justify-content-between align-items-center px-4 py-2">
                    <div><b>#{{ combination.id }}</b></div>
                    <div>{{ lang['tripId'] }}: {{ combination.trip_id }}</div>
                    <div>{{ lang['cost'] }}: {{ combination.price }}</div>
                    <div>{{ lang['available'] }}: {{ lang[combination.available] }}</div>
                </div>
            </template>
        </div>
    </div>
</template>

<style scoped>

</style>
