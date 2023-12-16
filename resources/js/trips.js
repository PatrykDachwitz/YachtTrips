import {createApp, ref, watch} from "vue";
import trips from "@/components/trips.vue";
import {getUrl, useFetch} from "@/primary_function/useFetch.js";
import {getLangContent} from "@/primary_function/language.js";

const lang = ref(getLangContent());
const { urlApi } = getUrl();
const { data: products } = useFetch(urlApi);

createApp(trips)
    .provide('urlApi', urlApi)
    .provide('lang', lang)
    .provide('products', products)
    .mount('#app');
