<script setup>
defineProps([
    'name',
    'data'
])
</script>

<template>
    <select class="form-select" :name="name" data-form-main>
        <template v-if="data.data !== null">
            <option v-for="item in data.data"
                    :value="item.id"
            >{{ item.name }}</option>
        </template>
    </select>
</template>

<style scoped>

</style>
