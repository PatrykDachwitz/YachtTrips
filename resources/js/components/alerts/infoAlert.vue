<script setup>
defineProps([
    'text'
])
</script>

<template>
    <div class="alert alert-primary d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
        <div>
            {{ text }}
        </div>
    </div>
</template>

<style scoped>

</style>
