<script setup>

import {inject} from "vue";
import LogOut from "@/components/menu/logOut.vue";
import Profil from "@/components/menu/profil.vue";
import Navigations from "@/components/menu/navigations.vue";

const lang = inject('lang');
</script>

<template>
    <nav class="offcanvas-body p-lg-4 menu" data-bs-theme="dark" style="min-width: 220px !important;">
        <div class="d-flex align-items-center w-100 justify-content-between p-2 px-4 p-lg-0">
            <router-link :to="{ name: 'home' }" class="d-flex align-items-center text-white text-decoration-none">
                <profil></profil>
            </router-link>


            <router-link :to="{ name: 'universal__index', params: { target: 'baners'} }">
                Test
            </router-link>

            <div class="d-flex d-lg-none menu-button-active">
                <picture>
                    <source srcset="/files/icons/close.webp" type="image/webp"/>
                    <img src="/files/icons/close.png" width="30" height="30" class="menu-image-close menu-button d-none" />
                </picture>
                <picture>
                    <source srcset="/files/icons/menu.webp" type="image/webp"/>
                    <img src="/files/icons/menu.png" width="30" height="30" class="menu-image-active menu-button d-flex" />
                </picture>
            </div>
        </div>

        <hr class="d-none d-lg-block" />

        <div class="menu-content d-none d-lg-block border-top-grayUltraLight-mobile-1 flex-column flex-lg-row">
            <navigations></navigations>

            <hr class="d-none d-lg-block"/>

            <log-out></log-out>
        </div>
    </nav>

</template>

<style scoped>

</style>
