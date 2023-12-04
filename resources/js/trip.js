import {createApp, ref, provide } from "vue";
import trip from "@/components/trip.vue";
import {getUrl} from "@/primary_function/useFetch.js";
import {getLangContent} from "@/primary_function/language.js";

const lang = getLangContent()
const { urlApi, urlCreate } = getUrl();
const price = ref(0);
const selectRoom = ref(null);
const sessionId = document.querySelector('input[data-session-id]').value;



createApp(trip)
    .provide('lang', lang)
    .provide('price', price)
    .provide('selectRoom', selectRoom)
    .provide('urlApi', urlApi)
    .provide('urlOrders', urlCreate)
    .provide('sessionId', sessionId)
    .mount('#app')
