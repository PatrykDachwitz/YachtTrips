<script setup>
import {inject, ref, watch} from "vue";
import Configurator from "@/components/trip/configurator.vue";
import {useFetch, useFetchPost, useFetchPut} from "@/primary_function/useFetch.js";
import Gallery from "@/components/trip/gallery.vue";

const urlApi = inject('urlApi');
const urlOrders = inject('urlOrders');
const sessionId = inject('sessionId');
console.info(urlOrders)
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
const { data: trip } = useFetch(urlApi)
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
    const inputsSend = {
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
    useFetchPost(urlOrders.value, JSON.stringify(inputsSend))
}



</script>

<template>
    <gallery v-if="trip !== null" :gallery="trip.images" />

    <div class="product-configurator w-50 pt-5 px-2 d-flex flex-column justify-content-start" v-if="trip !== null">

        <configurator :trip="trip" @updatePrice="(params) => updatePrice(params)"  />

        <div class="d-flex justify-content-end w-75 align-items-center">
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
