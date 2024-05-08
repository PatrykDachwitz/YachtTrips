import './bootstrap';
import {createApp} from "vue";
import {adminRouter} from "@/settings/adminRouter.js";
import dashboard from "@/layout/admin/dashboard.vue";
import {getLanguage} from "@/utils/getLanguage.js";

const lang = getLanguage();

createApp(dashboard)
    .use(adminRouter)
    .provide('lang', lang)
    .mount('#app');
