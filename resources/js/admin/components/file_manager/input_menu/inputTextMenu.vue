<script setup>
import {inject, reactive, ref, watch} from "vue";
import {getUrlByDataSetName, useFetchPost, useFetchPut} from "@/primary_function/useFetch.js";
import {getJsonByInputName, getJsonOryginalByInputName} from "@/primary_function/menu_file_manager/valueInput.js";
import {geUrlWithIdSource} from "@/primary_function/menu_file_manager/urlByIdSourceAndTypeMethod.js";
import {updateTimestampUrl} from "@/primary_function/getUpdateUrl.js";
const actualSelectOptionsInMenu = inject('actualSelectOptionsInMenu');
const details = inject('details');
const urlFileManager = inject('urlFileManager');
const lang = inject('lang');
const settings = inject('settings');
const dataFilesManager = inject('dataFilesManager');

function sendData(typeAction) {
    switch (typeAction) {
        case "update":

            break;
    }
}

function updateData() {
    let nameInput = settings.value.inputs[0];
    let dataUpdate = getJsonByInputName(nameInput, nameInput);
    let updateUrl = geUrlWithIdSource(details.value.id, details.value.type);
    useFetchPut(updateUrl, dataUpdate);

    setTimeout(() => {
        urlFileManager.value = updateTimestampUrl(urlFileManager.value);
    }, 100);

    actualSelectOptionsInMenu.value = false;
}

function createData() {

    const urlCreateFolder = getUrlByDataSetName('data-folder');
    let nameInput = settings.value.inputs[0];
    let dataCreate = getJsonOryginalByInputName(nameInput, 'name');
    dataCreate['parent'] = dataFilesManager.value.content.id;

    useFetchPost(urlCreateFolder, JSON.stringify(dataCreate));

    setTimeout(() => {
        urlFileManager.value = updateTimestampUrl(urlFileManager.value);
    }, 100);

    actualSelectOptionsInMenu.value = false;
}

function activeForm() {

    if (settings.value.action === 'createFolder') {
        createData();
    } else {
        updateData();
    }
}
</script>

<template>
    <div class="position-absolute min-vh-100 w-100 d-flex justify-content-center align-items-center">
        <div class="d-flex flex-column overflow-hidden rounded-2 bg-gray shadow-sm border-gray-1">
            <div class="bg-dark fs-5 text-white p-1 px-2 d-flex justify-content-between">{{ lang['getName'] }}
                <picture>
                    <source srcset="/files/icons/close.webp" type="image/webp">
                    <img src="/files/icons/close.png" width="25" height="25"
                         class="pointer"
                         @click="actualSelectOptionsInMenu = null"
                    />
                </picture>
            </div>

            <div class="d-flex flex-column p-3">
                <input v-for="nameInput in settings.inputs" type="text" :name="nameInput" value="" class="form-control mb-2" :placeholder="lang['newName']">
                <input type="submit" class="btn btn-dark fs-6" :value="lang['changeName']"
                       @click="activeForm"
                >
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
