import './bootstrap';
import {createApp, ref} from "vue";
import {adminRouter} from "@/settings/adminRouter.js";
import dashboard from "@/layout/admin/dashboard.vue";
import {getLanguage} from "@/utils/getLanguage.js";

const lang = getLanguage();
const alerts = ref([]);

createApp(dashboard)
    .use(adminRouter)
    .provide('lang', lang)
    .provide('alerts', alerts)
    .mount('#app');
