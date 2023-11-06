<script setup>

import contents from './dashboard/contents.vue';
import navbar from './dashboard/navbar.vue';
import alert from "@/admin/components/elements/alert.vue";
import {inject, provide, ref} from "vue";

const errors = inject('errors');

defineProps([
    'name',
    'id',
])

</script>

<template>

    <div class="alerts position-absolute bottom-0 end-0 m-0" data-errors-alerts>
    </div>

    <navbar
        :name="name"
        :id="id">
        <slot name="header" />
    </navbar>

    <slot name="content">
        <contents/>
    </slot>
</template>

<style scoped>

</style>
