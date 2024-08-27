<script setup>

import {inject} from "vue";
import {getLogOutUrl} from "@/utils/getLogOutUrl.js";
import {communicationApi} from "@/utils/communicationApi.js";
import {useRouter} from "vue-router";

const lang = inject('lang')
const communication = new communicationApi();
const router = useRouter();
async function logOut() {
    const logOutUrl = getLogOutUrl();
    const response = await communication.post(logOutUrl);


    if (response.status === 301) {
        response.dataPost.then(json => {
            window.location.href = json.url;
        });
    }

}

</script>

<template>
    <div class="border-top-grayUltraLight-mobile-1 ps-4 pb-1 p-lg-0" >
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 fs-6 ps-0 collapsed"
        @click="logOut">
            <picture>
                <source srcset="/files/icons/logout.webp" type="image/webp">
                <img src="/files/icons/logout.png" class="me-2" width="25" height="25">
            </picture>
            {{ lang['menu']['logOut'] }}
        </button>
    </div>
</template>

<style scoped>

</style>
