<script setup>
defineProps([
    'text'
])
</script>

<template>

    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
            {{ text }}
        </div>
    </div>
</template>

<style scoped>

</style>
