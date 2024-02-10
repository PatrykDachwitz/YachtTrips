import {createApp, ref} from "vue";
import edit from "./components/edit.vue";
import {getLangContent} from "@/primary_function/language.js";
import {useFetch} from "@/primary_function/useFetch.js";
const lang = ref(getLangContent());
const urlFileManager = ref('http://127.0.0.1:8000/api/folders/1');
const { data:dataFilesManager, error} = useFetch(urlFileManager);
const editViewActive = ref(true);
const selectImage = ref([]);

createApp(edit)
    .provide('lang', lang)
    .provide('dataFilesManager', dataFilesManager)
    .provide('urlFileManager', urlFileManager)
    .provide('editViewActive', editViewActive)
    .provide('selectImage', selectImage)
    .mount("#app");

