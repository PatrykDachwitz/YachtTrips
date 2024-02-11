<script setup>
import {inject, provide, ref, watch} from "vue";
import Configurator from "@/components/trip/configurator.vue";
import {useFetch, useFetchPost, useFetchPut} from "@/primary_function/useFetch.js";
import Gallery from "@/components/trip/gallery.vue";
import InfoAboutCart from "@/components/trip/infoAboutCart.vue";
import infoAboutCart from "@/components/trip/infoAboutCart.vue";

const urlApi = inject('urlApi');
const urlOrders = inject('urlOrders');
const sessionId = inject('sessionId');

const lang = inject('lang');
const price = inject('price');
const selectRoom = inject('selectRoom');
const dateForm = ref({
    countAdult: 1,
    countKids: 0,
    doubleBeds: 0,
    singleBeds: 0,
    kidsBeds: 0,
    premiumRoom: 0,
});


const { data: trip } = useFetch(urlApi);

watch(trip, () => {
    calculatePrice();

    const loadingPage = document.querySelector('div.loading-page');
    setTimeout(()=> {
        loadingPage.parentElement.removeChild(loadingPage);
    }, 100);

});

function getAvailableRoom() {
    let rooms = trip.value.rooms;

    let roomSelected = null;

    rooms.forEach(room => {
        if (
            dateForm.value.countAdult <= room.adults
            &&
            dateForm.value.countKids <= room.kids
            &&
            dateForm.value.doubleBeds <= room.double_beds
            &&
            dateForm.value.singleBeds <= room.single_beds
            &&
            dateForm.value.kidsBeds <= room.kids_beds
            &&
            dateForm.value.premiumRoom == room.premium
            &&
            0 == room.pivot.reservation
        ) {
            roomSelected = room;
            return room;
        }
    })

    return roomSelected;
}

const tripDetail = ref(null);
provide('tripDetail', tripDetail);
function calculatePrice() {
    let priceAdult = dateForm.value.countAdult * trip.value.price_adult;
    let priceKids = dateForm.value.countKids * trip.value.price_kids;

    selectRoom.value = getAvailableRoom();

    price.value = priceAdult + priceKids + selectRoom.value.pivot.price;
}
function updatePrice({value, name}) {
    dateForm.value[name] = value;
    calculatePrice();
}

function reservation() {
    tripDetail.value = {
        "trip_id": trip.value.id,
        "number_room": selectRoom.value.pivot.number_room,
        "count_adult": dateForm.value.countAdult,
        "count_kids": dateForm.value.countKids,
        "double_beds": dateForm.value.doubleBeds,
        "single_beds": dateForm.value.singleBeds,
        "kids_beds": dateForm.value.kidsBeds,
        "price": price.value,
        "session_id": sessionId,
    }
    const {dataPost} = useFetchPost(urlOrders.value, JSON.stringify(tripDetail.value));

    watch(dataPost, () => {
        tripDetail.value.url = dataPost.value.urlClient;
        tripDetail.value.trip = trip.value;
        nameWindow.value = 'infoAboutCart';
    });
}

const windowCart = ref({
    infoAboutCart
})
const nameWindow = ref('emptyWindow')
provide('nameWindow', nameWindow);
</script>

<template>
    <template v-if="trip !== null">
    <component :is="windowCart[nameWindow]" />
    </template>
    <gallery v-if="trip !== null" :gallery="trip.images" />

    <div class="product-configurator w-100 max-lg-50 pt-5 px-2 d-flex flex-column justify-content-start align-items-center justify-content-lg-between align-items-xxl-start" v-if="trip !== null">

        <configurator :trip="trip" @updatePrice="(params) => updatePrice(params)"  />

        <div class="d-flex justify-content-end w-100 max-lg-75 align-items-center">
            <div class="fs-4">{{ lang.price }}:&nbsp;<strong>{{ price }} zł</strong></div>
            <div class="btn btn-dark fs-5 ms-3" @click="reservation" >{{ lang.bookTrip }}</div>
        </div>
    </div>

</template>

<style scoped>
.card-mini {
    min-width: 114px;
}
</style>
