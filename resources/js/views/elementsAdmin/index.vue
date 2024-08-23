<script setup>
import { useFetch } from "../../primary_function/useFetch.js";
import {useRoute} from "vue-router";
import NavBarContent from "@/layout/admin/navBarElement.vue";
import {getParentNameRoute} from "@/utils/getParentNameRoute.js";
import {changeAdminPagePathToApiPath} from "@/utils/changeAdminPagePathToApiPath.js";
import {inject, ref, watch} from "vue";
import {communicationApi} from "@/utils/communicationApi.js";
import OptionIndexView from "@/components/admin/optionIndexView.vue";

const route = useRoute();
const urlApi = changeAdminPagePathToApiPath(route.path);
const messages = inject('messages');


const communication = new communicationApi();

const data = communication.get(urlApi);

const routeParentName = getParentNameRoute(route.name);

</script>

<template>
    <nav-bar-content></nav-bar-content>

    <div class="overflow-y-auto flex-1" v-if="data !== null">
        <option-index-view
            v-for="item in data.data"
            :id="item.id"
            :name="item.name"
            :routeParentName="routeParentName"
            url-delete=""
        ></option-index-view>
    </div>

</template>

<style scoped>
</style>
