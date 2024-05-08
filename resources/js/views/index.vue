<script setup>
import { useFetch } from "../primary_function/useFetch.js";
import {useRoute} from "vue-router";
import NavBarContent from "@/layout/admin/navBarContent.vue";
import OptionIndexView from "@/layout/admin/optionIndexView.vue";
import {getParentNameRoute} from "@/utils/getParentNameRoute.js";
import {changeAdminPagePathToApiPath} from "@/utils/changeAdminPagePathToApiPath.js";
import {ref, watch} from "vue";

const route = useRoute();
const urlApi = changeAdminPagePathToApiPath(route.path);
const { data, error } = useFetch(urlApi);

watch(() => route.path, () => {
    const urlApi = changeAdminPagePathToApiPath(route.path);
    { data, error } = useFetch(urlApi);
})


const routeParentName = getParentNameRoute(route.name);

</script>

<template>
    <nav-bar-content></nav-bar-content>

    <div class="overflow-y-scroll flex-1" v-if="data !== null">
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
