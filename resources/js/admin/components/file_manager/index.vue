<script setup>
import { ref, provide } from 'vue'
import {useFetch} from "@/primary_function/useFetch.js";
import dashboard from "../dashboard.vue";
import Navbar from "@/admin/components/dashboard/navbar.vue";
import File from "@/admin/components/file_manager/file.vue";
import Folder from "@/admin/components/file_manager/folder.vue";

const url = ref('http://127.0.0.1:8000/api/folders/2');
const { date, error} = useFetch(url);

provide("urlApiFileManager", url);

setTimeout(() => {
    console.log(date)
    console.log(error)
}, 1000);
</script>

<template>
    <div>
        <div class="bg-dark p-2 ps-3">
            <div class="fs-4 text-white">
                Menadżer plików
            </div>

            <div class="noTypicalBorder fs-4 pt-1">
                <a class="pe-2"><b>&lt</b></a>
                <a><b>></b></a>
                <a class="ps-2"><b>+</b></a>
            </div>
        </div>
        <div class="bg-info sendFile d-flex justify-content-center align-items-center">
            <div>resr</div>
        </div>
        <div class="row p-4 g-1" @drag="console.log('test')">
            <folder v-for="folder in date.folders" :name="folder.name" />
            <file v-for="file in date.content.files" :name="file.name" :src="file.preview_path" />
        </div>

    </div>

</template>

<style scoped>
.sendFile {
    min-height: 15vh;
    max-height: 15vh;

}
.noTypicalBorder a {
    color: #fff;
    cursor: pointer;

}
.noTypicalBorder{
 border-top: 1px solid #FFF;

}
</style>
