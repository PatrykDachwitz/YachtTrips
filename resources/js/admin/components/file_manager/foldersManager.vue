<script setup>
import {inject} from "vue";
import SingleFolder from "@/admin/components/file_manager/singleFolder.vue";

const dataFilesManager = inject('dataFilesManager');
const lang = inject('lang');


</script>

<template v-if="dataFilesManager !== null">

    <single-folder :folder="{
        url: dataFilesManager.content.urlParent,
        name: lang['previousFolder']
    }"
    v-if="dataFilesManager.content.id > 1"
    />
    <single-folder v-for="folder in dataFilesManager.folders"
                   :folder="folder"
                   @click.right="(e) => {
             $emit('active-menu', folder.id, 'folder', e.pageY, e.pageX)
         }"
    />
</template>

<style scoped>

</style>
