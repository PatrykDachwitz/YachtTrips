<script setup>
import {inject} from "vue";

import {useFetchDeleted} from "@/primary_function/useFetch.js";
import {updateTimestampUrl} from "@/primary_function/getUpdateUrl.js";
import {geUrlWithIdSource} from "@/primary_function/menu_file_manager/urlByIdSourceAndTypeMethod.js";

const actualSelectOptionsInMenu = inject('actualSelectOptionsInMenu');
const details = inject('details');
const urlFileManager = inject('urlFileManager');
const lang = inject('lang');
function deleteDate() {
    let urlApi = geUrlWithIdSource(details.value.id, details.value.type);
    useFetchDeleted(urlApi);

    setTimeout(() => {
        urlFileManager.value = updateTimestampUrl(urlFileManager.value);
    }, 100);


    actualSelectOptionsInMenu.value = null;
}


</script>

<template>
    <div class="position-absolute top-0 left-0 min-vh-100 w-100 d-flex justify-content-center align-items-center deleted">
        <div class="d-flex flex-column overflow-hidden rounded-2 bg-gray shadow-sm border-gray-1">
            <div class="bg-dark fs-5 text-white p-1 px-2 d-flex justify-content-between">
                {{ lang['confirmDeletedFile'] }}
                <picture>
                    <source srcset="/files/icons/close.webp" type="image/webp">
                    <img src="/files/icons/close.png" width="25" height="25"
                         class="pointer"
                        @click="actualSelectOptionsInMenu = null"
                    />
                </picture>
            </div>

            <div class="d-flex flex-column p-3">
                <input type="submit" class="btn btn-dark fs-6" :value="lang['deleteFile']"
                       @click="deleteDate"
                >
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
