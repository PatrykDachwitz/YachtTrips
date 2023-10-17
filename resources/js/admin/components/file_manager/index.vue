<script setup>
import { ref, provide } from 'vue'
import {useFetch} from "@/primary_function/useFetch.js";
import dashboard from "../dashboard.vue";
import Navbar from "@/admin/components/dashboard/navbar.vue";
import File from "@/admin/components/file_manager/file.vue";
import Folder from "@/admin/components/file_manager/folder.vue";

const url = ref('http://127.0.0.1:8000/api/folders/2');
const { date, error} = useFetch(url);

setTimeout(() => {
    console.log(date)
    console.log(error)
}, 1000);
</script>

<template>
    <div>
        <navbar
            name="menadżer plików"
        />
        <div>

        </div>
        <div class="row p-4 g-1" @drag="console.log('test')">
            <folder v-for="folder in date.folders" :name="folder.name" />
            <file v-for="file in date.content.files" :name="file.name" :src="file.preview_path" />
        </div>

    </div>

</template>

<style scoped>
</style>
