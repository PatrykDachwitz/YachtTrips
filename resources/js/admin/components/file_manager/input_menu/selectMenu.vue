<script setup>
import {inject} from "vue";
import {getJsonByInputName} from "@/primary_function/menu_file_manager/valueInput.js";
import {geUrlWithIdSource} from "@/primary_function/menu_file_manager/urlByIdSourceAndTypeMethod.js";
import {updateTimestampUrl} from "@/primary_function/getUpdateUrl.js";
import {useFetchPut} from "@/primary_function/useFetch.js";

const details = inject('details');
const urlFileManager = inject('urlFileManager');
const dataFilesManager = inject('dataFilesManager');
const lang = inject('lang');
function changeLocation() {
    let dataUpdate = getJsonByInputName('select_folder', 'folder_id');
    let updateUrl = geUrlWithIdSource(details.value.id, details.value.type);

    useFetchPut(updateUrl, dataUpdate);

    setTimeout(() => {
        urlFileManager.value = updateTimestampUrl(urlFileManager.value);
    }, 100);

    actualSelectOptionsInMenu.value = false;
}

const actualSelectOptionsInMenu = inject('actualSelectOptionsInMenu');
</script>

<template>
    <div class="position-absolute min-vh-100 w-100 d-flex justify-content-center align-items-center">
        <div class="d-flex flex-column overflow-hidden rounded-2 bg-gray shadow-sm border-gray-1">
            <div class="bg-dark fs-5 text-white p-1 px-2 d-flex justify-content-between">{{ lang['getNewLocation'] }}
                <picture>
                    <source srcset="/files/icons/close.webp" type="image/webp">
                    <img src="/files/icons/close.png" width="25" height="25"
                         class="pointer"
                         @click="actualSelectOptionsInMenu = null"
                    />
                </picture>
            </div>

            <div class="d-flex flex-column p-3">
                <select class="form-select" name="select_folder">
                    <template v-if="dataFilesManager.content.parent > 0">
                        <option :value="dataFilesManager.content.parent">{{ lang['previousFolder'] }}</option>
                    </template>
                    <option v-for="folder in dataFilesManager.folders" :value="folder.id">{{ folder.name }}</option>
                </select>
                <input type="submit" class="btn btn-dark fs-6 mt-1" :value="lang['changeLocation']"
                       @click.prevent="changeLocation"
                >
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
