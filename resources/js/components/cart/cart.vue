<script setup>
import {inject, provide, ref} from "vue";
import CartOrders from "@/components/cart/cartOrders.vue";
import CartPersonalData from "@/components/cart/cartPersonalData.vue";
import CartDeliveryPayment from "@/components/cart/cartDeliveryPayment.vue";
import CartHolidayMakersData from "@/components/cart/cartHolidayMakersData.vue";

const activeError = inject('activeError');
const order = inject('order');
const lang = inject('lang');
const availableView = inject('availableView');
const currentView = inject('currentView');
const list = ref([
    1,
    2,
    3,
    4,
])


</script>

<template>

    <div v-if="activeError === true" class="position-absolute top-0 start-0 min-vh-100 w-100 d-flex justify-content-center align-items-center" style="z-index: 99999999999">
        <div class="bg-danger rounded-1 text-white py-2 px-5 fs-5">
            <strong>{{ lang.errorCart }}</strong>
        </div>
    </div>

    <div class="d-flex justify-content-center my-3 d-none">

        <div class="position-relative">
            <div class=" d-flex align-items-center justify-content-center mx-5  bg-gray rounded-circle p-2 border-grayLight-1 shadow-sm pkt" v-for="numerList in list">{{ numerList }}</div>
            <div class="test"></div>
            <div class="test bg-success w-50"></div>
        </div>
    </div>
    <div class="d-flex flex-column-reverse flex-lg-row cart-container-left justify-content-center">
        <div class="flex-1">
            <component :is="availableView[currentView]" />
        </div>
        <div class="ms-lg-5 my-3 my-lg-0">
            <cart-orders />
        </div>
    </div>
</template>

<style scoped>

.test {
    top: 27px;
    position: absolute;
    width: 100%;
    min-height: 5px;
    background-color: #2d3748;
}

.pkt {
    min-width: 60px;
    min-height: 60px;
    font-size: 1.5rem;
    z-index: 98 !important;
    background-color: #212529;
}
.pkt:nth-child(4) {
    margin-right: 0px !important;
}
.pkt:nth-child(1) {
    margin-left: 0px !important;
}

</style>
