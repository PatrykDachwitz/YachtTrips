<script setup>
import CartContent from "@/components/cart/cartContent.vue";
import { inject, ref } from "vue";

const lang = inject('lang');
</script>

<template>
    <cart-content>
        <span class="fs-2"><strong>{{  lang['detailOrder'] }}</strong></span>
        <div class="d-flex flex-column mt-3">
            <div class="shadow-sm d-flex justify-content-between align-items-center border-grayLight-1 p-2 overflow-hidden rounded-2 mb-2">
                <div class="rounded-2 overflow-hidden">
                    <picture>
                        <img src="http://127.0.0.1/slide1.jpg" width="245" height="150" />
                    </picture>
                </div>
                <div class="d-flex flex-column flex-xxl-row align-items-start justify-content-evenly w-100 px-3 align-items-xxl-center">
                    <div>
                        {{ lang['deadline'] }}:&nbsp;<strong>25.11.2023 - 26.11.2024</strong>
                    </div>
                    <div>
                        {{ lang['countRoom'] }}:&nbsp;<strong>12</strong>
                    </div>
                    <div>
                        {{ lang['countPeople'] }}:&nbsp;<strong>5 ({{ lang['adults'] }}), 4 ({{ lang['kid'] }})</strong>
                    </div>

                    <div>
                        {{ lang['price'] }}:&nbsp;&nbsp<strong>120zł</strong>
                    </div>
                </div>
                <div class="btn btn-danger">
                    {{ lang['delete'] }}
                </div>
            </div>
        </div>
    </cart-content>
</template>

<style scoped>

</style>
