<script setup>
import {ref, provide, inject} from 'vue'
import {useFetch} from "@/primary_function/useFetch.js";
import File from "@/admin/components/file_manager/file.vue";
import Folder from "@/admin/components/file_manager/folder.vue";
import NavBar from "@/admin/components/file_manager/navBar.vue";

const url = ref('http://127.0.0.1:8000/api/folders/1');
const { data, error} = useFetch(url);

const activeFileManager = inject('activeFileManager');
//console.log(activeFileManager);
function closeManager() {
    console.log(activeFileManager);
    activeFileManager.value = false;
}
provide("urlApiFileManager", url);

</script>

<template>
    <div class="top-0 left-0 position-absolute bg-white fileManager">
        <div class="bg-dark p-2 ps-3">
            <div class="fs-4 text-white d-flex justify-content-between align-items-center">
                <span>Menadżer plików</span>
                <div @click="closeManager">
                    <picture>
                        <source src="/files/icons/add.webp" type="image/webp">
                        <img src="/files/icons/add.png" alt="close file manager" width="20" height="20">
                    </picture>
                </div>
            </div>

            <nav-bar />
        </div>

        <div class="row p-4 g-1" v-if="data !== null">
            <folder v-for="folder in data.folders ?? []" :folder="folder" />
            <file v-for="file in data.content.files" :file="file" />
        </div>

    </div>

</template>

<style scoped>


.fileManager {
    z-index: 100;
    min-height: 100%;
    min-width: 100%;
}
.sendFile {


}
.noTypicalBorder a {
    color: #fff;
    cursor: pointer;

}
.noTypicalBorder{
 border-top: 1px solid #FFF;

}

.drago {
    min-height: 15vh;
    max-height: 15vh;
    background-color: blanchedalmond;
    text-decoration: none;
    width: 100%;

}

</style>
