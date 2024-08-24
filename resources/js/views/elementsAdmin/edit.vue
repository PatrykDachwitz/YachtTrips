<script setup>
import {getCorrectFormPage} from "@/utils/getCorrectFormPage.js";
import {useRoute} from "vue-router";
import {inject, provide} from "vue";
import Element from "@/layout/admin/element.vue";
import {communicationApi} from "@/utils/communicationApi.js";
import {changeAdminPagePathToApiPathForShowWithRemoveEditData} from "@/utils/changeAdminPagePathToApiPath.js";


const route = useRoute();
const target = route.params.target;
const formComponent = getCorrectFormPage(target);
const lang = inject('lang');
const urlApi = changeAdminPagePathToApiPathForShowWithRemoveEditData(route.path);

console.log(urlApi);
const communication = new communicationApi();

const data = communication.get(urlApi);

provide("dataForm", data);

</script>

<template>
    <element
        v-if="data !== null"
        :name="data.name"
        :id="data.id"
    >
        <template v-slot:formSlot>
            <component
                :is="formComponent"
            ></component>
        </template>

        <template v-slot:inputs>
            <RouterLink :to="{name:'universal__show', params: {target: target, id:data.id}}">
                <img src="/files/icons/view.png" class="pointer" alt="view" width="20" height="20"/>
            </RouterLink>
            <img src="/files/icons/save.png" class="pointer ms-2" alt="save" width="20" height="20" />
            <img src="/files/icons/save_exit.png" class="pointer ms-2" alt="save and exit" width="24" height="24" />
            <img src="/files/icons/add.png" class="pointer ms-2" alt="create new" width="20" height="20" />
            <img src="/files/icons/delete.png" class="pointer ms-2" alt="create new" width="20" height="20" />
        </template>
    </element>

</template>

<style scoped>

</style>
