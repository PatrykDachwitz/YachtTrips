<script setup>
import {inject, provide, ref} from "vue";
import CartContent from "@/components/cart/cartContent.vue";

const selectPayment = ref(null);
const lang = inject('lang');

provide('selectPayment', selectPayment);
</script>

<template>
    <cart-content>
            <span class="fs-2"><strong>{{ lang['payment'] }}</strong></span>
        <div class="d-flex flex-column mt-3">

            <div class="  d-flex justify-content-between align-items-center p-3 mb-2 rounded-2 border-grayLight-1">
                <div class="rounded-2 overflow-hidden">
                    <picture>
                        <img src="http://127.0.0.1/slide1.jpg" width="120" height="75" />
                    </picture>
                </div>
                <div class="d-flex justify-content-evenly w-100 px-3 align-items-center">
                    <div>
                        Kurier DPD
                    </div>
                    <div>
                        {{ lang['cost'] }}:&nbsp;<strong>120zł</strong>
                    </div>
                </div>
                <div class="btn btn-outline-dark" @click="selectPayment = 1">
                    {{ lang['selected'] }}
                </div>
            </div>
        </div>
    </cart-content>
</template>

<style scoped>

</style>
