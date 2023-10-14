<script setup>

import contents from './dashboard/contents.vue';
import navbar from './dashboard/navbar.vue';

defineProps([
    'name',
    'id',
])

</script>

<template>

    <navbar
        :name="name"
        :id="id"
    />

    <slot>
        <contents/>
    </slot>
</template>

<style scoped>

</style>
