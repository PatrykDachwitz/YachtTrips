import {createApp, ref} from "vue";
import edit from "./components/edit.vue";
import {getLangContent} from "@/primary_function/language.js";
import {getUrlByDataSetName, useFetch} from "@/primary_function/useFetch.js";
const lang = ref(getLangContent());
const urlFileManager = ref(getUrlByDataSetName('data-folder-url-main'));
const { data:dataFilesManager, error} = useFetch(urlFileManager);
const editViewActive = ref(false);
const selectImage = ref([]);

createApp(edit)
    .provide('lang', lang)
    .provide('dataFilesManager', dataFilesManager)
    .provide('urlFileManager', urlFileManager)
    .provide('editViewActive', editViewActive)
    .provide('selectImage', selectImage)
    .mount("#app");

