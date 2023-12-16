<script setup>
 import {inject} from "vue";

 defineProps([
     'folder'
 ]);

 const url = inject('url')

</script>

<template>
    <div class="col-2 col-lg-1 overflow-hidden d-flex flex-column align-items-center justify-content-top pointer single-element-file-manager" @click="url = folder.url">
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
