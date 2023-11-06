<script setup>
import {inject, ref} from "vue";

defineProps([
    'file'
])
const numberFile = ref(null);
const selectedFiles = inject('selectedFiles');
const activeSelected = inject('activeSelected');
console.info(`selectedFiles: ${selectedFiles.value}`)
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

function updateStatusActiveNewFile() {
    if (selectedFiles.value.length >= 1) {
        activeSelected.value = true;

    } else {
        activeSelected.value = false;
    }
}
function updateFile(file) {
    console.log(`file: ${file}`);
    selectedFiles.value.push(file)

    // console.log(file);
    // if (numberFile.value === null) {
    //     numberFile.value = positionFiles();
    //     selectedFiles.value.push = file;
    // } else {
    //     selectedFiles.value[numberFile.value] = null;
    //     numberFile.value = null;
    // }
    //
    // updateStatusActiveNewFile();
    // console.log(selectedFiles.value);
    // updateBackGroundFile(file.id);
}

</script>

<template>
    <div class="col-2 col-lg-1 overflow-hidden d-flex flex-column align-items-center justify-content-top p-1" @click="updateFile(file)" :data-file-id="file.id">
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
