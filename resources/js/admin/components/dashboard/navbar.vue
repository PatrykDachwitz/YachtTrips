<script setup>
defineProps([
    'id',
    'name',
    'saveFunction'
]);
</script>

<template>
    <div class="bg-dark p-2 ps-3">
        <div class="fs-4 text-white">
            <span v-if="id">#{{ id }}</span> {{ name }}
        </div>

    </div>
</template>

<style scoped>

</style>
