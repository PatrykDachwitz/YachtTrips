<script setup>
import contents from './dashboard/contents.vue';
import navbar from './dashboard/navbar.vue';
import {inject, provide, ref} from "vue";
import Alert from "@/admin/components/elements/alert.vue";

const errorsTest = inject('errors')


defineProps([
    'name',
    'id',
])
</script>

<template>

    <div class="alerts position-absolute bottom-0 end-0 m-0" data-errors-alerts v-if="errorsTest !== null">
        <alert  v-for="error in errorsTest"
            :mesage="error.mesage"
            :code="error.code"
            :id="error.id"
            :key="error.id"
        />
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
