<script setup>
import {ref, provide, watch, watchEffect} from 'vue'
import { useFetch, getUrl } from "../../primary_function/useFetch.js";
import dashboard from "@/admin/components/dashboard.vue";
import optionList from "@/admin/components/list/optionList.vue";
import ImageForm from "@/admin/components/elements/imageForm.vue";
import alert from "@/admin/components/elements/alert.vue"
const fakeErrorrs = [12, 23];
const { url, urlApi } = getUrl();
const { date, error } = useFetch(urlApi);

const errors = ref(null);


watch(date, ()  => {

    const arrayDateVersion = Object.keys(date.value).map(key => ({ [key]: date.value[key] }));

    arrayDateVersion.forEach(value => {
        for (let key in value) {
            changeValue(key, value[key])
        }
    });
    console.log(error)
    changePositionForm();
});

function changeValue(name, value) {
    try {
        document.querySelector(`input[name='${name}']`).value = value;
    } catch (e) {
        try {
            document.querySelector(`select[name='${name}'] > option[value='${value}']`).selected = true;
        } catch (e) {
        }
    }
}
function active(content) {
    const contentShow = document.querySelectorAll('div[data-content-show]');
    contentShow.forEach(item => {
        item.classList.remove('d-none');
        item.classList.add('d-none');
    })
    document.querySelector(`div[data-content-show='${content}']`).classList.remove('d-none');
}
function changePositionForm() {
    const formShow = document.querySelector('form[data-show-form]');
    const containerForm = document.querySelector('[data-show-form-container]');
    containerForm.append(formShow);
}
function save() {
    let form = document.querySelector('form[data-show-form]');

    let formData =  new FormData(form);
    console.log(formData);
    const newElement = vue.createElement('alert');

}

provide('urlApiCurrent', urlApi);
provide('errors', errors);

</script>

<template>




    <dashboard
        name="Lista"
    >
        <template v-slot:header>
            <div>
                <img src="/files/icons/save.png" alt="save" width="25" height="25" @click="save"/>
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
                    <label for="exampleFormControlTextarea1" class="form-label">Krótka treść</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Długa treść</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="height: 100%"></textarea>
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
</style>
