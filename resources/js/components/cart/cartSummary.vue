<script setup>
import CartContent from "@/components/cart/cartContent.vue";
import {inject, ref, watch} from "vue";
import CartProduct from "@/components/cart/cartProduct.vue";
const lang = inject('lang');
const order = inject('order');


</script>

<template>
    <cart-content v-if="order !== null">
        <span class="fs-2"><strong>{{  lang['detailOrder'] }}</strong></span>
        <div class="d-flex flex-column mt-3">
            <cart-product v-for="product in order.books" :product="product"></cart-product>

        </div>
    </cart-content>
</template>

<style scoped>

</style>
