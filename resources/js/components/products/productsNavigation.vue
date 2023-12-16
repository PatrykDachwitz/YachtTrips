<script setup>
import {inject} from "vue";

const products = inject('products');
const urlApi = inject('urlApi');
console.log(products)
function updateUrl(newUrl) {
    urlApi.value = newUrl;
}

</script>

<template>
    <section class="w-100 d-flex justify-content-center mt-5">
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
