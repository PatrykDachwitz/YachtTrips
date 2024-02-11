<script setup>
import {inject} from "vue";
import InfoAboutCartProduct from "@/components/trip/InfoAboutCartProduct.vue";

const tripDetail = inject('tripDetail');
const lang = inject('lang');
const nameWindow = inject('nameWindow');

function deactivateAboutProduct() {
    nameWindow.value = "Empty";
}
</script>

<template>
<div class="position-absolute top-0 left-0 min-vh-100 w-100 d-flex justify-content-center align-items-center z-index-100">
    <div class="position-fixed shadow rounded-2 p-4 bg-white">
        <strong class="fs-2">{{ lang['summaryCart'] }}</strong>
        <info-about-cart-product/>
        <div class="d-flex justify-content-end">
            <button class="btn btn-outline-dark me-1" @click="deactivateAboutProduct">{{ lang['continueShopping'] }}</button>
            <a class="btn btn-dark" :href="tripDetail.url">{{ lang['goToCart'] }}</a>
        </div>
    </div>
</div>
</template>

<style scoped>
.z-index-100 {
    z-index: 100;
}
</style>
