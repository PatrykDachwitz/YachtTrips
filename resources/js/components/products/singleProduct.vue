<script setup>
import {inject} from "vue";
defineProps([
    'product'
]);

const lang = inject('lang');
</script>

<template>
    <div class="col-6 col-md-4 col-lg-3 col-xxl-2">
        <div class=" shadow rounded-2 overflow-hidden shadow-sm">

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
                <div class="w-100 d-flex justify-content-end fs-6 align-items-center">
                    Cena od&nbsp;<strong>{{ product.minimal_price }} zł</strong>
                    <hr />
                    <a class="ms-2 btn fs-6 btn-dark" :href="product.url">{{ lang['check'] }}</a>
                </div>
            </div>

        </div>
    </div>
</template>

<style scoped>

</style>
