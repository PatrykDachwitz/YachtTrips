<script setup>
import {inject, provide, ref} from "vue";
import CartContent from "@/components/cart/cartContent.vue";
import {useFetch} from "@/primary_function/useFetch.js";

const selectPayment = ref(null);
const lang = inject('lang');
const paymentsAvailableUrl = inject('paymentsAvailableUrl');
const { data: payments } = useFetch(paymentsAvailableUrl);


</script>

<template>
    <cart-content>
            <span class="fs-2"><strong>{{ lang['payment'] }}</strong></span>
        <div class="d-flex flex-column mt-3">

            <template v-if="payments !== null" v-for="payment in payments">
                <div class="  d-flex justify-content-between align-items-center p-3 mb-2 rounded-2 border-grayLight-1">
                    <div class="rounded-2 overflow-hidden">
                        <picture>
                            <img src="http://127.0.0.1/slide1.jpg" width="120" height="75" />
                        </picture>
                    </div>
                    <div class="d-flex text-start w-100 px-3 align-items-center">
                        <strong class="fs-4">
                            {{ payment.name }}
                        </strong>
                    </div>
                    <div class="btn btn-outline-dark" @click="selectPayment = payment.id">
                        {{ lang['selected'] }}
                    </div>
                </div>
            </template>

        </div>
    </cart-content>
</template>

<style scoped>

</style>
