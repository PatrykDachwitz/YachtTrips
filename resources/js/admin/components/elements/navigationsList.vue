<script setup>
import {inject} from "vue";

const data = inject('data')
const urlApiCurrent = inject('urlApiCurrent');

function updateUrl(newUrl) {
    urlApiCurrent.value = newUrl;
}
</script>

<template>
    <div class="border-top-navigation-gray-1" v-if="data !== null">
        <section class="w-100 d-flex justify-content-center my-2" v-if="data.last_page > 1" >
            <template v-for="(dataSingle, index) in data.links">
                <div class="mx-1">
                    {{ data.links.current_page}}
                    <button @click="updateUrl(dataSingle.url)" :class="'btn  ' + [index === data.current_page || index === (data.last_page + 1) || index === 0 ? 'btn-dark' : 'btn-outline-dark']" :disabled="dataSingle.url === null">{{ dataSingle.label }}</button>
                </div>
            </template>

        </section>
    </div>
</template>

<style scoped>

</style>
