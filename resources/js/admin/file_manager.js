import {createApp, provide, ref} from "vue";
import index from "../admin/components/file_manager/index.vue";
import {getLangContent} from "@/primary_function/language.js";
import {useFetch} from "@/primary_function/useFetch.js";

const url = ref('http://127.0.0.1:8000/api/folders/1');
const { data, error} = useFetch(url);
const lang = getLangContent();

createApp(index)
    .provide('data', data)
    .provide('lang', lang)
    .provide('url', url)
    .mount("#app");
