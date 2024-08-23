<script setup>


import Alerts from "@/components/alerts.vue";
import AdminMenu from "@/layout/admin/adminMenu.vue";
</script>

<template>

    <div class="dashboard flex-column flex-lg-row">
        <div id="navbar" class="shadow bg-dark text-white menu-mobile">
            <admin-menu></admin-menu>
        </div>
        <div class="dashboard-content rounded-3 shadow position-relative flex-column m-5 overflow-hidden">
            <router-view >

            </router-view>
            <hr />

        </div>
    </div>
</template>

<style scoped>

</style>
