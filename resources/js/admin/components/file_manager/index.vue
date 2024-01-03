<script setup>
import {inject} from 'vue'
import File from "@/admin/components/file_manager/file.vue";
import FoldersManager from "@/admin/components/file_manager/foldersManager.vue";
import NavBar from "@/admin/components/file_manager/navBar.vue";
import Upload from "@/admin/components/file_manager/upload.vue";

const url = inject('url');
const data = inject('data');

</script>

<template>

    <div class="position-relative">
        <div class="bg-dark p-2 ps-3">
            <div class="fs-4 text-white">
                Menadżer plików test
            </div>
            <nav-bar />
        </div>


        <div class="testDivStyle" v-if="data !== null">
            <upload />

            <div class="row p-4 g-1 fielsCurretn">
                <folders-manager />
                <file v-for="file in data.content.files" :file="file" />
            </div>
        </div>
    </div>

</template>

<style scoped>
.noTypicalBorder a {
    color: #fff;
    cursor: pointer;

}

</style>
