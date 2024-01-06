<script setup>
import {ref, provide, watch} from 'vue'
import { useFetch, getUrl } from "../../primary_function/useFetch.js";
import dashboard from "@/admin/components/dashboard.vue";
import optionList from "@/admin/components/list/optionList.vue";
import Navbar from "@/admin/components/dashboard/navbar.vue";
import NavigationsList from "@/admin/components/elements/navigationsList.vue";

const { url, urlApi, urlCreate } = getUrl();
const { data, error } = useFetch(urlApi);

provide('urlApiCurrent', urlApi);
provide('data', data);
</script>

<template>

    <navbar
    name="Lista">

        <a :href="urlCreate" v-if="urlCreate !== ''">
            <picture>
                <source srcset="/files/icons/add.webp" type="image/webp">
                <img src="/files/icons/add.png" width="20" height="20" alt="new content">
            </picture>
        </a>
    </navbar>

    <div class="overflow-y-scroll flex-1" v-if="data !== null">
        <option-list
            v-for="item in data.data"
            :key="item.id"
            :name="item.name"
            :id="item.id"
            :url="url"
        />
    </div>

    <div>
        <navigations-list />
    </div>
</template>

<style scoped>
.testClassList {
    max-height: 100%;
}
div.lists {
    flex: 1;
}
</style>
