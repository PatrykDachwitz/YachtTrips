<script setup>
defineProps([
    'text'
])
</script>

<template>
    testAlert
    <div class="alert alert-warning d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
            {{ text }}
        </div>
    </div>
</template>

<style scoped>

</style>
