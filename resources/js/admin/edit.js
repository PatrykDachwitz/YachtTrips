import {createApp, ref} from "vue";
import edit from "./components/edit.vue";
import {getLangContent} from "@/primary_function/language.js";
const lang = ref(getLangContent());

createApp(edit)
    .provide('lang', lang)
    .mount("#app");

