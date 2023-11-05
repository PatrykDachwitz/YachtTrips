<script setup>
import {inject} from "vue";

defineProps([
    'folder'
])

const urlApiFileManager = inject('urlApiFileManager');

function openFolder(idFolder) {
    console.log(idFolder)
    let newUrlApi = `http://127.0.0.1:8000/api/folders/${idFolder}`;
    console.log(newUrlApi);
    urlApiFileManager.value = newUrlApi;
}

</script>

<template>
    <div class="col-2 col-lg-1 overflow-hidden d-flex flex-column align-items-center justify-content-top" @click="openFolder(folder.id)">
        <div>
            <img src="/file_preview/folder.png" width="70" height="70"/>
        </div>
        <div class="text-center">
            {{ folder.name }}
        </div>
    </div>
</template>

<style scoped>

</style>
