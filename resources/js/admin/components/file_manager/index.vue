<script setup>
import {ref, provide, watch} from 'vue'
import {useFetch} from "@/primary_function/useFetch.js";
import File from "@/admin/components/file_manager/file.vue";
import FoldersManager from "@/admin/components/file_manager/foldersManager.vue";
import {getLangContent} from "@/primary_function/language.js";
import NavBar from "@/admin/components/file_manager/navBar.vue";

const url = ref('http://127.0.0.1:8000/api/folders/1');
const { data, error} = useFetch(url);
const lang = getLangContent();


provide('data', data);
provide('lang', lang);
provide('url', url);
provide("urlApiFileManager", url);

</script>

<template>

    <div class="position-relative">
        <div class="bg-dark p-2 ps-3">
            <div class="fs-4 text-white">
                Menadżer plików
            </div>
            <nav-bar />
        </div>


        <div class="testDivStyle" v-if="data !== null">
            <div class="bg-success min-vh-100 m-0 p-0 position-fixed w-100 sendContent" @click="console.log('test')">

            </div>
            <div class="row p-4 g-1 fielsCurretn">
                <folders-manager />
                <file v-for="file in data.content.files" :file="file" />
            </div>
        </div>
    </div>

</template>

<style scoped>
.sendContent {
max-width: 100%;
z-index: 10;
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
