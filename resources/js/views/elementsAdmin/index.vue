<script setup>
import { useFetch } from "../../primary_function/useFetch.js";
import {useRoute} from "vue-router";
import NavBarContent from "@/layout/admin/navBarElement.vue";
import {getParentNameRoute} from "@/utils/getParentNameRoute.js";
import {changeAdminPagePathToApiPath} from "@/utils/changeAdminPagePathToApiPath.js";
import {inject, ref, watch} from "vue";
import {communicationApi} from "@/utils/communicationApi.js";
import OptionIndexView from "@/components/admin/optionIndexView.vue";
import NavBarElement from "@/layout/admin/navBarElement.vue";

const route = useRoute();
const urlApi = changeAdminPagePathToApiPath(route.path);
const messages = inject('messages');
const communication = new communicationApi();
const data = communication.get(urlApi);
const lang = inject('lang');
</script>

<template>
    <nav-bar-element
        id=""
        :name="lang['list'][route.params.target]"
    ></nav-bar-element>

    <div class="overflow-y-auto flex-1" v-if="data !== null">
        <option-index-view
            v-for="item in data.data"
            :id="item.id"
            :name="item.name"
        ></option-index-view>
    </div>

</template>

<style scoped>
</style>
