<script setup>

import {ref, provide, watch } from 'vue'
import { useFetch, getUrl, useFetchPut } from "../../primary_function/useFetch.js";
import dashboard from "@/admin/components/dashboard.vue";
import fileManager from '@/admin/components/file_manager/fileManager.vue';
import emptySupport from "@/admin/components/emptySupport.vue"
import imageForm from "@/admin/components/elements/imageForm.vue"
import alert from "@/admin/components/elements/alert.vue";
import { changeJsonToArray } from "@/primary_function/conversionType.js";
import {
    changePositionForm,
    downloadDataForm,
    updateValueInform,
    active,
    updateIssetInput,
    updateErrorsInForm
} from "@/primary_function/updateFormCreateEditView.js";


const { urlUpdate, urlApi } = getUrl();
const { data, error } = useFetch(urlApi);

watch(data, ()  => {

    const dataForm = changeJsonToArray(data)
    updateValueInform(dataForm);
    changePositionForm();

});
function save() {
    let formData = downloadDataForm();

    let { dataPut, errorPut } = useFetchPut(urlUpdate, formData);
    watch(dataPut, () => {
        updateIssetInput(dataPut);
    })

    watch(errorPut, () => {
        errorPut.value.then(test => {
            updateErrorsInForm(test.errors);
        })
    })


}


provide('urlApiCurrent', urlApi);

const activeSelected = ref(false)
const selectedFiles = ref([null]);



const activeFileManager = ref(false);
provide('selectedFiles', selectedFiles);
provide('activeFileManager', activeFileManager);
provide('activeSelected', activeSelected);


const currentComponentFileManager = ref('emptySupport')

const supportComponent = {
    fileManager,
    emptySupport
}


function  activeManager() {
    activeFileManager.value = true;

    if (currentComponentFileManager.value !== "fileManager") {
        currentComponentFileManager.value = "fileManager";
    }

}
</script>

<template>

    <dashboard
    name="Lista"
    >

        <template v-slot:header>
            <div>
                <img src="/files/icons/save.png" class="pointer" alt="save" width="25" height="25" @click="save"/>
            </div>
        </template>
        <template v-slot:content>
            <component :is="supportComponent[currentComponentFileManager]" v-if="activeFileManager"></component>

            <div class="bg-gray p-2 " style="border-bottom: 1.5px solid #d3d3d3">
                <a class="btn btn-dark" @click="active('info')">Informacje</a>
                <a class="btn btn-dark mx-2" @click="active('media')">Media</a>
                <a class="btn btn-dark" @click="active('content')">Kontent</a>
            </div>

            <div data-show-form-container class="" data-content-show="info">
            </div>

            <div data-show-form-container class="p-4 d-none" data-content-show="content">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Treść</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="height: 100%" name="description"></textarea>
                </div>
            </div>

            <div class="p-5 d-none" data-content-show="media">
                <div style="border-bottom: 1.5px solid #d3d3d3">
                    <button class="btn btn-outline-dark btn-add" @click="activeManager"><strong>+</strong></button>
                    Grafika
                </div>
                <div v-if="data !== null">
                     <image-form class="graphic-container py-4"  v-for="image in data.images" :image="image" :key="image.id" />
                </div>

                <div v-if="activeSelected">
                <!--    <image-form class="graphic-container py-4"  v-for="imageCustom in selectedFiles" :image="imageCustom" />-->
                    <div v-for="imageCustom in selectedFiles">
                        {{imageCustom}}

                        tests
                    </div>

                    testse


                </div>

            </div>
            <div class="position-absolute bottom-0 end-0 me-3">
               <!-- <alert v-for="errort in fakeErrorrs" :error="errort"/>-->
            </div>
        </template>

    </dashboard>
</template>

<style scoped>
div.lists {
    flex: 1;
}

.text
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
