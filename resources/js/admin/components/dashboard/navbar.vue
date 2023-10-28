<script setup>
defineProps([
    'id',
    'name',
    'saveFunction'
]);
</script>

<template>
    <div class="bg-dark p-2 ps-3 d-flex align-items-center justify-content-between">
        <div class="fs-4 text-white">
            <span v-if="id">#{{ id }}</span> {{ name }}
        </div>
        <div>
            <slot />
        </div>
    </div>
</template>

<style scoped>

</style>
