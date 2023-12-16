<script setup>
import {inject} from "vue";
import SingleFolder from "@/admin/components/file_manager/singleFolder.vue";

const data = inject('data');
const lang = inject('lang');

</script>

<template v-if="data !== null">

    <single-folder :folder="{
        url: data.urlParent,
        name: lang['previousFolder']
    }" />
    <single-folder v-for="folder in data.folders" :folder="folder" />
</template>

<style scoped>

</style>
