<script setup>
import {inject, onMounted} from "vue";

const products = inject('products');
const urlApi = inject('urlApi');

function updateUrl(newUrl) {
    urlApi.value = newUrl;
}

</script>

<template>
    <section class="w-100 d-flex justify-content-center mt-5" v-if="products.last_page > 1">
        <template v-for="(linkProducts, index) in products.links">
            <div class="mx-1">
                {{ products.links.current_page}}
                <button @click="updateUrl(linkProducts.url)" :class="'btn  ' + [index === products.current_page || index === (products.last_page + 1) || index === 0 ? 'btn-dark' : 'btn-outline-dark']" :disabled="linkProducts.url === null">{{ linkProducts.label }}</button>
            </div>
        </template>

    </section>
</template>

<style scoped>

</style>
