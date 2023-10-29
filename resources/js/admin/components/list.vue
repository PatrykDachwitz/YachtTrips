<script setup>
import { ref, provide } from 'vue'
import { useFetch, getUrl } from "../../primary_function/useFetch.js";
import dashboard from "@/admin/components/dashboard.vue";
import optionList from "@/admin/components/list/optionList.vue";

const { url, urlApi } = getUrl();
const { data, error } = useFetch(urlApi);

provide('urlApiCurrent', urlApi);

</script>

<template>

    <dashboard
        name="Lista"
    >
        <div class="overflow-y-scroll lists">
            <option-list
                v-for="item in data"
                :key="item.id"
                :name="item.name"
                :id="item.id"
                :url="url"
            />
        </div>
    </dashboard>
</template>

<style scoped>
div.lists {
    flex: 1;
}
</style>
