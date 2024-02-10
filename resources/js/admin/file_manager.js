import {createApp, provide, ref} from "vue";
import index from "../admin/components/file_manager/index.vue";
import {getLangContent} from "@/primary_function/language.js";
import {getUrlByDataSetName, useFetch} from "@/primary_function/useFetch.js";

const urlFileManager = ref(getUrlByDataSetName('data-folder-url-main'));
const { data:dataFilesManager, error} = useFetch(urlFileManager);
const lang = getLangContent();

createApp(index)
    .provide('dataFilesManager', dataFilesManager)
    .provide('lang', lang)
    .provide('urlFileManager', urlFileManager)
    .mount("#app");
