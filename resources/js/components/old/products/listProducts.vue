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
        <div class="col-6 col-md-4 col-lg-3 col-xxl-2">
            <div class=" shadow rounded-2 overflow-hidden shadow-sm listing-product__container">

                <div v-if="product.images_category !== []">

                    <picture v-for="image in product.images_category">
                        <source :srcset="image.link_webp" type="image/webp">
                        <img :src="image.link_image" width="245" height="150" class="w-100"/>
                    </picture>
                </div>

                <div class="p-2 d-flex ocean-content flex-column justify-content-between">
                    <p class="fs-5 mb-0">
                        {{ product.name }}
                    </p>
                    <div class="w-100 d-flex fs-6 align-items-center flex-column flex-xl-row justify-content-between">
                        <strong>od: {{ product.minimal_price }} zł</strong>
                        <a class="ms-2 btn fs-6 btn-dark" :href="product.url">{{ lang['check'] }}</a>
                    </div>
                </div>

            </div>
        </div>

        <section class="w-100 d-flex justify-content-center mt-5" v-if="products.last_page > 1">
            <template v-for="(linkProducts, index) in products.links">
                <div class="mx-1">
                    {{ products.links.current_page}}
                    <button @click="updateUrl(linkProducts.url)" :class="'btn  ' + [index === products.current_page || index === (products.last_page + 1) || index === 0 ? 'btn-dark' : 'btn-outline-dark']" :disabled="linkProducts.url === null">{{ linkProducts.label }}</button>
                </div>
            </template>

        </section>
    </div>
</template>

<style scoped>

</style>



