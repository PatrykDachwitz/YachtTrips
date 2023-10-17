<script setup>
import {useFetchDeleted} from "@/primary_function/useFetch.js";
import { ref, inject } from "vue";

defineProps([
    'id',
    'name',
    'url',
]);
const urlApiCurrent = inject('urlApiCurrent');
const deleteUrl = urlApiCurrent.value;

function useFetchDeletedCustom(id) {
    useFetchDeleted(`${deleteUrl}/${id}`);

    urlApiCurrent.value = urlApiCurrent.value + "?ts=13";
    console.log(urlApiCurrent.value);
}
</script>

<template>
    <div class="lists-single-element p-2  shadow-sm px-4">
        <div>
            <a
                :href="`${url}/${id}/edit`"
                class="fs-4 text-dark"
            >
                #{{ id }}
                {{ name }}
            </a>
        </div>
        <div>
            <a :href="`${url}/${id}`" class="text-dark fs-5 customBorder pe-2">Wyświetl</a>
            <a :href="`${url}/${id}/edit`" class="text-dark fs-5 mx-2 pe-2 customBorder">Edytuj</a>
            <a class="text-dark fs-5" @click="useFetchDeletedCustom(id)">Usuń</a>
        </div>
    </div>
</template>

<style scoped>
a {
    text-decoration: none;
    cursor: pointer;
}
</style>
