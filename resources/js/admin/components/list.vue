<script setup>
import { ref, inject, provide } from 'vue'
import { useFetch, getUrl } from "../../primary_function/useFetch.js";
import dashboard from "@/admin/components/dashboard.vue";
import optionList from "@/admin/components/list/optionList.vue";

const url = ref(getUrl());
const urlApiCurrent = ref(`api${url.value}`);

const { date, error } = useFetch(urlApiCurrent);

provide('urlApiCurrent', urlApiCurrent);

</script>

<template>

    <dashboard
        name="Lista"
    >
        <div class="overflow-y-scroll lists">
            <option-list
                v-for="item in date"
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
