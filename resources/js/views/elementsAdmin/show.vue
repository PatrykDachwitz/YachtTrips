<script setup>
import {getCorrectFormPage} from "@/utils/getCorrectFormPage.js";
import {useRoute} from "vue-router";
import {inject, provide} from "vue";
import Element from "@/layout/admin/element.vue";
import {communicationApi} from "@/utils/communicationApi.js";
import {changeAdminPagePathToApiPath} from "@/utils/changeAdminPagePathToApiPath.js";

const route = useRoute();
const target = route.params.target;
const formComponent = getCorrectFormPage(target);
const lang = inject('lang');
const urlApi = changeAdminPagePathToApiPath(route.path);
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
            <RouterLink :to="{name:'universal__edit', params: {target: target, id:data.id}}">
                <img src="/files/icons/edit.png" class="pointer" alt="save" width="20" height="20" @click="formController.create()"/>
            </RouterLink>
        </template>
    </element>

</template>

<style scoped>

</style>
