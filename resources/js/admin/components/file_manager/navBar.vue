<script setup>

import {inject} from "vue";

const dataFilesManager = inject('dataFilesManager');
const urlFileManager = inject('urlFileManager');
</script>

<template>
    <div class="noTypicalBorder fs-4 pt-1" v-if="dataFilesManager !== null">
        <div class="pointer" v-if="dataFilesManager.parent > 0" @click="urlFileManager = dataFilesManager.urlParent">
            <picture>
                <source srcset="/files/icons/arrow.webp" type="image/webp">
                <img src="/files/icons/arrow.png" width="40" height="40" alt="previousFolder" />
            </picture>
        </div>
    </div>
</template>

<style scoped>
</style>
