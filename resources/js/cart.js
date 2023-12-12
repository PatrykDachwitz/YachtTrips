import {createApp, provide, ref} from "vue";
import cart from "@/components/cart/cart.vue";
import {getLangContent} from "@/primary_function/language.js";
import {getUrl, useFetch} from "@/primary_function/useFetch.js";
import CartSummary from "@/components/cart/cartSummary.vue";
import CartPersonalData from "@/components/cart/cartPersonalData.vue";
import CartDeliveryPayment from "@/components/cart/cartDeliveryPayment.vue";
import CartHolidayMakersData from "@/components/cart/cartHolidayMakersData.vue";

const lang = ref(getLangContent());
const { urlApi } = getUrl();
const {data: order} = useFetch(urlApi);
const availableView = ref([
    CartSummary,
    CartPersonalData,
    CartDeliveryPayment,
    CartHolidayMakersData,
]);
const currentView = ref(0);

createApp(cart)
    .provide('lang', lang)
    .provide('order', order)
    .provide('urlApi', urlApi)
    .provide('currentView', currentView)
    .provide('availableView', availableView)
    .mount("#cart")
