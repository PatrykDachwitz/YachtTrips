<script setup>
import {inject, ref, watch} from "vue";
import {CustomFormData} from "@/primary_function/CustomFormData.js";
import {FormController} from "@/primary_function/formController.js";

const lang = inject('lang');
const order = inject('order');
const availableView = inject('availableView');
const currentView = inject('currentView');
const urlUpdate = inject('urlUpdate');
const urlApi = inject('urlApi');
const urlUpdateVacationers = inject('urlUpdateVacationers');


function updatePersonalData() {
    const form = new FormController('data-cart-personal-data-form', urlUpdate.value)

    const { dataPut, errorPut } = form.update();

    watch(dataPut, () => {
        let date = new Date();
        urlApi.value += `?ts=${date.getTime()}`;
        currentView.value++;
    })
}
function updateVacationers() {
    const form = new FormController('data-cart-vacationers-data-form', urlUpdateVacationers)

    const { dataPut, errorPut } = form.update();

   /* watch(dataPut, () => {
        let date = new Date();
        urlApi.value += `?ts=${date.getTime()}`;
        currentView.value++;
    })*/
}
function updateNextView() {

    switch (availableView.value[currentView.value].__name) {
        case "cartPersonalData":
            updatePersonalData();
            break;
        case "cartDeliveryPayment":
            currentView.value++;
            break;
        case "cartHolidayMakersData":
            updateVacationers();
            break;
        default:
            currentView.value++;
            break;
    }
}

</script>

<template>
    <div v-if="order !== null" class="bg-gray rounded-2 overflow-hidden shadow-sm p-3 border-grayLight-1 d-flex flex-column align-items-center align-items-lg-start">
        <span class="fs-3"><strong>{{ lang['summary'] }}</strong></span>
        <hr class="my-1 hr"/>
        <div class="d-none d-lg-block">
            <span class="fs-5">{{ lang['products'] }}</span>

            <ul class="list-unstyled fs-6 my-1">
                <li v-for="trip in order.books">{{ trip.trips.name }}:&nbsp;<strong>{{ trip.price }} zł</strong></li>
            </ul>
            <span class="fs-5 mb-0">{{ lang['summaryProducts'] }}:&nbsp;<strong>{{ order.price }} zł</strong></span>
        </div>

        <hr class="mt-1 mb-2 hr"/>

        <div class="d-flex flex-column w-100">
            <div class="btn btn-outline-dark fs-6 mb-1" @click="currentView--" v-if="currentView > 0">
                {{ lang['previous'] }}
            </div>

            <div class="btn btn-dark fs-6" @click="updateNextView">
                <strong>{{ lang['next'] }}</strong>
            </div>
        </div>

    </div>
</template>

<style scoped>
.hr {
    @media only screen and (max-width: 991px) {
        min-height: 1px;
        min-width: 50%;
    }
    @media only screen and (min-width: 991px) {
        min-height: 1px;
        min-width: 100%;
    }
}
</style>
