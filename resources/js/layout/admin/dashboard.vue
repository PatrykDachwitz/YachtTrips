<script setup>

import AdminMenu from "@/components/adminMenu.vue";
</script>

<template>
    <div class="dashboard flex-column flex-lg-row" id="app">
        <div id="navbar" class="shadow bg-dark text-white menu-mobile">
            <admin-menu></admin-menu>
        </div>
        <div class="dashboard-content">
            <div class="windowAction rounded-3 shadow position-relative" id="app">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
