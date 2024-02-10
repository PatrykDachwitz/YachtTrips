<script setup>

import {ref, provide, watch, inject} from 'vue'
import { useFetch, getUrl, useFetchPut } from "../../primary_function/useFetch.js";
import dashboard from "@/admin/components/dashboard.vue";
import emptySupport from "@/admin/components/emptySupport.vue"
import imageForm from "@/admin/components/elements/imageForm.vue"
import { changeJsonToArray } from "@/primary_function/conversionType.js";
import {
    changePositionForm,
    active, updateValueInform,
} from "@/primary_function/updateFormCreateEditView.js";
import {FormController} from "@/primary_function/formController.js";
import calendar from "@/components/calendar.vue";
import Index from "@/admin/components/file_manager/index.vue";

const { urlUpdate, urlApi } = getUrl();
const { data, error } = useFetch(urlApi);
const activeSelected = ref(false)
const selectImage = inject('selectImage');
const activeFileManager = ref(false);
const currentComponentFileManager = ref('emptySupport')
const supportComponent = {
    calendar,
    emptySupport
}
const dataFilesManager = inject('dataFilesManager');
const activeCalendar = ref('emptySupport');
const editViewActive = inject('editViewActive');
const locationDataSet = ref(null);
const formController = new FormController('data-show-form', urlUpdate.value);
formController.setCurrenActiveImages(true);
formController.setAdditionalInputsName('description', false);

const lang = inject('lang');
provide('activeCalendar', activeCalendar);
provide('locationDataSet', locationDataSet);
provide('activeFileManager', activeFileManager);
provide('activeSelected', activeSelected);
provide('urlApiCurrent', urlApi);

watch(data, ()  => {

    const dataForm = changeJsonToArray(data)
    updateValueInform(dataForm);
    changePositionForm();
    runCalendar();

});

function runCalendar() {
    const calendarInputs = document.querySelectorAll('[data-calendar-input]');

    calendarInputs.forEach(calendarInput => {
        calendarInput.addEventListener('click', () => {
            if (activeCalendar.value === "calendar") {
                activeCalendar.value = "emptySupport";
            } else {
                activeCalendar.value = "calendar";
                locationDataSet.value = calendarInput.dataset.calendarInput;
            }
        })
    });
}
function  activeManager() {
    activeFileManager.value = true;

    if (currentComponentFileManager.value !== "fileManager") {
        currentComponentFileManager.value = "fileManager";
    }

}
</script>

<template>

    <dashboard name="Lista" >
        <template v-slot:header>
            <div>
                <img src="/files/icons/save.png" class="pointer" alt="save" width="25" height="25" @click="formController.update()"/>
            </div>
        </template>
        <template v-slot:content>
            <template v-if="dataFilesManager !== null" >
                <div class="m-5 position-absolute rounded-2 shadow-sm bg-light border-gray-1 file-manager__container-edit-view overflow-y-scroll overflow-x-hidden" v-if="editViewActive === true">
                    <index />
                </div>
            </template>
            <component :is="supportComponent[currentComponentFileManager]" v-if="activeFileManager"></component>
            <!--Komponent dedykowany kalendarzowi-->
            <component :is="supportComponent[activeCalendar]" :locationByDataSet="locationDataSet"> </component>



            <div class="bg-gray p-2 " style="border-bottom: 1.5px solid #d3d3d3" v-if="lang">
                <a class="btn btn-dark" @click="active('info')">{{ lang['information'] }}</a>
                <a class="btn btn-dark mx-2" @click="active('media')">{{ lang['media'] }}</a>
                <a class="btn btn-dark" @click="active('content')">{{ lang['contents'] }}</a>
            </div>

            <div data-show-form-container class="" data-content-show="info">
            </div>

            <div data-show-form-container class="p-4 d-none" data-content-show="content">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">{{ lang['contents'] }}</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="height: 100%" name="description"></textarea>
                </div>
            </div>

            <div class="p-5 d-none" data-content-show="media">
                <div style="border-bottom: 1.5px solid #d3d3d3">
                    <button class="btn btn-outline-dark btn-add" @click="editViewActive = true"><strong>+</strong></button>
                    {{ lang['graphics'] }}
                </div>
                <div v-if="data !== null">
                     <image-form class="graphic-container py-4"  v-for="image in data.images" :image="image" :key="image.id" />
                </div>

                <div>
                    <image-form class="graphic-container py-4"  v-for="file in selectImage" :image="file" :key="file.id" />
                </div>

            </div>
        </template>

    </dashboard>
</template>

<style scoped>
div.lists {
    flex: 1;
}
.file-manager__container-edit-view {
    top: 50px;
    max-height: 700px;
    z-index: 150 !important;
}
.text {}
.btn-add {
    border-radius: 100%;
}
div.graphic-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.pointer {
    cursor: pointer;
}
</style>
