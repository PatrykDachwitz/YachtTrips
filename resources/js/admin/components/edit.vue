<script setup>
import {ref, provide, watch } from 'vue'
import { useFetch, getUrl, useFetchPut } from "../../primary_function/useFetch.js";
import dashboard from "@/admin/components/dashboard.vue";
import alert from "@/admin/components/elements/alert.vue"
import { changeJsonToArray } from "@/primary_function/conversionType.js";
import {
    changePositionForm,
    downloadDataForm,
    updateValueInform,
    active,
    updateIssetInput
} from "@/primary_function/updateFormCreateEditView.js";


const { url, urlApi } = getUrl();
const { data, error } = useFetch(urlApi);

watch(data, ()  => {
    const dataForm = changeJsonToArray(data)
    updateValueInform(dataForm);

    changePositionForm();
});
function save() {
    let formData = downloadDataForm();

    let { dataPut, errorPut } = useFetchPut(urlApi, formData);
    watch(dataPut, () => {
        updateIssetInput(dataPut);
    })
}


provide('urlApiCurrent', urlApi);

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
                    <button class="btn btn-outline-dark btn-add"><strong>+</strong></button>
                    Grafika
                </div>
                <div>
                    <!--//*<image-form v-for="image in date.images" :image="image" :key="image.id"/>*/-->
                </div>
            </div>
            <div class="position-absolute bottom-0 end-0 me-3">
                <alert v-for="errort in fakeErrorrs" :error="errort"/>
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
