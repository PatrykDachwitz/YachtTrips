import {createApp, ref} from "vue";
import createNew from "./components/create.vue";
import {getLangContent} from "@/primary_function/language.js";
const lang = ref(getLangContent());

createApp(createNew)
    .provide('lang', lang)
    .mount("#app");

