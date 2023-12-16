<script setup>

import {inject} from "vue";

const data = inject('data');
const url = inject('url');
</script>

<template>
    <div class="noTypicalBorder fs-4 pt-1" v-if="data !== null">
        <div class="pointer" v-if="data.parent > 0" @click="url = data.urlParent">
            <picture>
                <source srcset="/files/icons/arrow.webp" type="image/webp">
                <img src="/files/icons/arrow.png" width="40" height="40" alt="previousFolder" />
            </picture>
        </div>
    </div>
</template>

<style scoped>

</style>
