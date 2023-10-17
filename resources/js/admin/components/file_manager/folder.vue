<script setup>
import {inject} from "vue";

defineProps([
    'name'
])

const urlApiFileManager = inject('urlApiFileManager');

function openFolder(idFolder) {
    urlApiFileManager.value = `http://127.0.0.1:8000/api/folders/${idFolder}`;
}

</script>

<template>
    <div class="col-1 overflow-hidden" @click="openFolder(1)">
        <div>
            <img src="/file_preview/folder.png" width="70" height="70"/>
        </div>
        <div class="text-center">
            {{ name }}
        </div>
    </div>
</template>

<style scoped>

</style>
