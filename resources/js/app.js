import './bootstrap';
import {createApp} from "vue";
import dashboard from "@/layout/dashboard.vue";
import {router} from "@/settings/router.js";

createApp(dashboard)
    .use(router)
    .mount("#app");
