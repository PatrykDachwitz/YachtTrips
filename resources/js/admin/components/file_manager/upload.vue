<script setup>
import {useFetchSendFiles} from "@/primary_function/useFetch.js";
import {inject, watch} from "vue";
import {updateTimestampUrl} from "@/primary_function/getUpdateUrl.js";
const data = inject('data');
const url = inject('url');

function uploadFile() {

    setTimeout(() => {
        const inputsUpload = document.querySelector(`input.sendContent[name="files[]"]`);
        let idFolder = data.value.content.id;
        let countFiles = inputsUpload.files.length;

        for (let i = 0; i < countFiles; i++) {
            const formData = new FormData();
            formData.append('file', inputsUpload.files[i]);
            formData.append('folder_id', idFolder);
            console.log(formData);
            const {data} = useFetchSendFiles(formData);
            watch(data, () => {
                url.value = updateTimestampUrl(url.value);
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
               @drop="uploadFile"

        />

    </form>

</template>

<style scoped>
.sendContent {
    max-width: 100%;
}
</style>
