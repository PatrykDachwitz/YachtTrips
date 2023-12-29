<script setup>
import {inject, onMounted, ref} from "vue";
import SingleProduct from "@/components/products/singleProduct.vue";
import Filters from "@/components/filters/filters.vue";
import ProductsNavigation from "@/components/products/productsNavigation.vue";

const products = inject('products');
const lang = inject('language');

</script>

<template>
    <div class="contents row contents-proucts g-3 mb-3 mx-2 mx-lg-4" v-if="products !== null">
        <single-product v-for="product in products.data" :product="product" />

        <products-navigation />
    </div>
</template>

<style scoped>

</style>
