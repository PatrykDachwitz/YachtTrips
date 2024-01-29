<script setup>
import {inject, ref} from "vue";

defineProps([
    'file'
])

const activeMenuFile = inject('activeMenuFile');


function positionFiles() {
    return selectedFiles.length;
}

function updateBackGroundFile(id) {
    const selectFile = document.querySelector(`div[data-file-id='${id}']`);

    if (!selectFile.classList.contains('activeFile')) {
        selectFile.classList.add('activeFile', 'bg-info');
    } else {
        selectFile.classList.remove('activeFile', 'bg-info');
    }
}


</script>

<template>
    <div class="col-2 col-lg-1 overflow-hidden d-flex flex-column align-items-center justify-content-top p-1 single-element-file-manager"
         :data-file-id="file.id"
         @click.right="(e) => {
             $emit('active-menu', file.id, 'file', e.pageY, e.pageX)
         }"
    >
        <div>
            <img :src="file.preview_path" width="70" height="70"/>
        </div>

        <div class="text-center">
            {{ file.name }}
        </div>

    </div>
</template>

<style scoped>


</style>
