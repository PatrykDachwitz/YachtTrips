<script setup>

import {inject} from "vue";

const lang = inject('lang')
</script>

<template>
    <form method="post" class="border-top-grayUltraLight-mobile-1 ps-4 pb-1 p-lg-0" >
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 fs-6 ps-0 collapsed">
            <picture>
                <source srcset="/files/icons/logout.webp" type="image/webp">
                <img src="/files/icons/logout.png" class="me-2" width="25" height="25">
            </picture>
            {{ lang['menu']['logOut'] }}
        </button>
    </form>
</template>

<style scoped>

</style>
