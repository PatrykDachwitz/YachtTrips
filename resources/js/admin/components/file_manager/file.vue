<script setup>
defineProps([
    'name',
    'src'
])
</script>

<template>
    <div class="col-1 overflow-hidden">
        <div>
            <img :src="src" width="70" height="70"/>
        </div>
        <div class="text-center">
            {{name }}
        </div>
    </div>
</template>

<style scoped>

</style>
