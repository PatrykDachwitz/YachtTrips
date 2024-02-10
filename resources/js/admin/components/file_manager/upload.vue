<script setup>
import {useFetchSendFiles} from "@/primary_function/useFetch.js";
import {inject, watch} from "vue";
import {updateTimestampUrl} from "@/primary_function/getUpdateUrl.js";
const dataFilesManager = inject('dataFilesManager');
const urlFileManager = inject('urlFileManager');

function uploadFile() {

    setTimeout(() => {
        const inputsUpload = document.querySelector(`input.sendContent[name="files[]"]`);
        let idFolder = dataFilesManager.value.content.id;
        let countFiles = inputsUpload.files.length;

        console.log(countFiles);

        for (let i = 0; i < countFiles; i++) {
            console.log('stest');
            const formData = new FormData();
            formData.append('file', inputsUpload.files[i]);
            formData.append('folder_id', idFolder);
            const {data} = useFetchSendFiles(formData);
            watch(data, () => {
                urlFileManager.value = updateTimestampUrl(urlFileManager.value);
            });
        }




    }, 100);

}
</script>

<template>
    <form enctype="multipart/form-data">
        <input type="file" class="p-3 bg-gray w-100 sendContent"
               multiple
               name="files[]"
               @input="uploadFile"

        />

    </form>

</template>

<style scoped>
.sendContent {
    max-width: 100%;
}
</style>
