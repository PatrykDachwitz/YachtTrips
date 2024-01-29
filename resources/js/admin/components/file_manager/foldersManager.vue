<script setup>
import {inject} from "vue";
import SingleFolder from "@/admin/components/file_manager/singleFolder.vue";

const data = inject('data');
const lang = inject('lang');


</script>

<template v-if="data !== null">

    <single-folder :folder="{
        url: data.content.urlParent,
        name: lang['previousFolder']
    }"
    v-if="data.content.id > 1"
    />
    <single-folder v-for="folder in data.folders"
                   :folder="folder"
                   @click.right="(e) => {
             $emit('active-menu', folder.id, 'folder', e.pageY, e.pageX)
         }"
    />
</template>

<style scoped>

</style>
