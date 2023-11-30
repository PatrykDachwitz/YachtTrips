import {createApp, provide, ref} from "vue";
import edit from "./components/edit.vue";
import {getLangContent} from "@/primary_function/language.js";
const errors = ref([]);
const lang = ref(getLangContent());
createApp(edit)
    .provide('lang', lang)
    .provide('errors', errors)
    .mount("#app");

