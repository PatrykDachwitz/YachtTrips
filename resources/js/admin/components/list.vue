<script setup>
import { ref, provide } from 'vue'
import { useFetch, getUrl } from "../../primary_function/useFetch.js";
import dashboard from "@/admin/components/dashboard.vue";
import optionList from "@/admin/components/list/optionList.vue";

const { url, urlApi, urlCreate } = getUrl();
const { data, error } = useFetch(urlApi);

provide('urlApiCurrent', urlApi);

</script>

<template>

    <dashboard
        name="Lista"
    >
        <template v-slot:header>
            <a :href="urlCreate" v-if="urlCreate !== ''">
                <picture>
                    <source srcset="/files/icons/add.webp" type="image/webp">
                    <img src="/files/icons/add.png" width="20" height="20" alt="new content">
                </picture>
            </a>
        </template>
        <template v-slot:content >
        <div class="overflow-y-scroll lists">
            <option-list
                v-for="item in data"
                :key="item.id"
                :name="item.name"
                :id="item.id"
                :url="url"
            />
        </div>
        </template>
    </dashboard>
</template>

<style scoped>
div.lists {
    flex: 1;
}
</style>
