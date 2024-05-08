<script setup>

import NaviagtionOption from "@/components/menu/naviagtionOption.vue";
import {inject} from "vue";

const lang = inject('lang');

const saleAvailableOptions = [
    'orders',
    'vacationers',
]
const travelAvailableOptions = [
    'trips',
    'yachts',
    'oceans',
    'rooms',
]
const contentAvailableOptions = [
    'banners',
    'pages',
]
</script>

<template>
    <ul class="list-unstyled ps-4 ps-lg-0 mb-0">
        <li>
            <naviagtion-option
                name="sales"
                :children="saleAvailableOptions"
            />
        </li>

        <li>

            <naviagtion-option
                name="travels"
                :children="travelAvailableOptions"
            />
        </li>
        <li>
            <naviagtion-option
                name="content"
                :children="contentAvailableOptions"
                />
        </li>
        <li>
            <div class="btn btn-toggle d-inline-flex align-items-center rounded border-0 fs-5 ps-0 collapsed">
                <div>
                    <picture>
                        <source srcset="/files/icons/file-management.webp" type="image/webp">
                        <img src="/files/icons/file-management.png" width="25" height="25">
                    </picture>
                </div>
                <a class="text-decoration-none fs-5 btn btn-toggle" href>{{ lang['menu']['files_manager'] }}</a>
            </div>
        </li>
        <li>
            <router-link :to="{ name: 'users-index' }" class="btn btn-toggle d-inline-flex align-items-center rounded border-0 fs-5 ps-0 collapsed">
                <picture>
                    <source srcset="/files/icons/group.webp" type="image/webp">
                    <img src="/files/icons/group.png" class="me-2" width="30" height="30">
                </picture>
                {{ lang['menu']['users'] }}
            </router-link>
        </li>
    </ul>
</template>

<style scoped>

</style>
