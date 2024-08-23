<script setup>

import {inject, watch, watchEffect} from "vue";

const messages = inject('messages');
console.info(messages)
watchEffect(() => messages, () => {
    console.log('zmiana w wiadomościach');
})
</script>

<template>
<section class="min-vh-100 min-vw-100 top-0 start-0 bg-warning">
    <h1 v-for="name in messages">
        {{ name }}
    </h1>
</section>
</template>

<style scoped>

</style>
