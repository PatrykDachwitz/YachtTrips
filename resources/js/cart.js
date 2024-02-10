import {createApp, provide, ref} from "vue";

import {getLangContent} from "@/primary_function/language.js";
import {getUrl, getUrlByDataSetName, useFetch} from "@/primary_function/useFetch.js";
import CartPersonalData from "@/components/cart/cartPersonalData.vue";
import CartDeliveryPayment from "@/components/cart/cartDeliveryPayment.vue";
import CartHolidayMakersData from "@/components/cart/cartHolidayMakersData.vue";
import CartSummary from "@/components/cart/cartSummary.vue";
import cart from "@/components/cart/cart.vue";

const lang = ref(getLangContent());
const paymentsAvailableUrl = getUrlByDataSetName('data-url-payments');
const { urlApi, urlUpdate } = getUrl();
const urlDeleteBooks = getUrlByDataSetName('data-url-delete-book');
const urlUpdateStatus = getUrlByDataSetName('data-url-update-status');
const urlVacationers = getUrlByDataSetName('data-url-vacationers');
const {data: order} = useFetch(urlApi);
const availableView = ref([
    CartSummary,
    CartPersonalData,
    CartHolidayMakersData
]);
const currentView = ref(0);
const activeError = ref(false);

createApp(cart)
    .provide('lang', lang)
    .provide('order', order)
    .provide('urlApi', urlApi)
    .provide('paymentsAvailableUrl', paymentsAvailableUrl)
    .provide('activeError', activeError)
    .provide('urlUpdate', urlUpdate)
    .provide('urlDeleteBooks', urlDeleteBooks)
    .provide('urlUpdateStatus', urlUpdateStatus)
    .provide('urlVacationers', urlVacationers)
    .provide('currentView', currentView)
    .provide('availableView', availableView)
    .mount("#cart")
