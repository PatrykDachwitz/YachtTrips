import {createApp, ref} from "vue";
import show from "./components/show.vue";
import {getLangContent} from "@/primary_function/language.js";
const lang = ref(getLangContent());

createApp(show)
    .provide('lang', lang)
    .mount("#app");
