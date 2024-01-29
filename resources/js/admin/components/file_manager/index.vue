<script setup>
import {inject, onMounted, provide, ref} from 'vue'
import File from "@/admin/components/file_manager/file.vue";
import FoldersManager from "@/admin/components/file_manager/foldersManager.vue";
import NavBar from "@/admin/components/file_manager/navBar.vue";
import Upload from "@/admin/components/file_manager/upload.vue";
import MenuFiles from "@/admin/components/file_manager/menuFiles.vue";
import {getUrlByDataSetName} from "@/primary_function/useFetch.js";

const url = inject('url');
const data = inject('data');
const details = ref({active: false});
provide('details', details);
const selectContent = ref(true);

provide('selectContent', selectContent);

onMounted(() => {
    document.addEventListener('contextmenu', function (event) {
        event.preventDefault();
    });
});

function activeMenu(id = null, type = null, pageY = 0, pageX = 0) {

    if (details.value.pageY === pageY && details.value.pageX === pageX) {
        id = details.value.id;
        type = details.value.type;
    }
    details.value = {
        active: true,
        type,
        id,
        pageY,
        pageX,
    }
}
</script>

<template>

    <div class=" ">
        <div class="bg-dark p-2 ps-3 navbar-admin-page">
            <div class="fs-4 text-white ">
                Menadżer plików test
            </div>
            <nav-bar />
        </div>


        <div v-if="data !== null"
             class="mainContainerFileManager"
            @click.right="(e) => {activeMenu(null, null, e.pageY, e.pageX)}"
        >

            <menu-files
                :details="details"
                />

            <div class="row p-4 g-1">
                <folders-manager
                    @active-menu="activeMenu"
                />
                <file
                    @active-menu="activeMenu"
                    v-for="file in data.content.files"
                    :file="file" />
            </div>
        </div>
    </div>

</template>

<style scoped>
.mainContainerFileManager {
    min-height: 100vh !important;
    z-index: 0;
}
.noTypicalBorder a {
    color: #fff;
    cursor: pointer;

}

.navbar-admin-page {
    z-index: 10;
}

</style>
