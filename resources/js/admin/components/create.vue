<script setup>

import {ref, provide, watch, inject, onMounted} from 'vue'
import { getUrl } from "../../primary_function/useFetch.js";
import dashboard from "@/admin/components/dashboard.vue";
import emptySupport from "@/admin/components/emptySupport.vue"
import {
    changePositionForm,
    active, updateValueInform,
} from "@/primary_function/updateFormCreateEditView.js";
import {FormController} from "@/primary_function/formController.js";
import calendar from "@/components/calendar.vue";


const { urlApi } = getUrl();

const activeSelected = ref(false)
const supportComponent = {
    calendar,
    emptySupport
}
const activeCalendar = ref('emptySupport');
const locationDataSet = ref(null);

const formController = new FormController('data-show-form', urlApi.value);
formController.setAdditionalInputsName('description', false);

const lang = inject('lang');
provide('activeCalendar', activeCalendar);
provide('locationDataSet', locationDataSet);
provide('activeSelected', activeSelected);


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
onMounted(() => {
    changePositionForm();
    runCalendar();
});
</script>

<template>

    <dashboard name="Lista 12" >
        <template v-slot:header>
            <div>
                <img src="/files/icons/save.png" class="pointer" alt="save" width="25" height="25" @click="formController.create()"/>
            </div>
        </template>
        <template v-slot:content>
            <!--Komponent dedykowany kalendarzowi-->
            <component :is="supportComponent[activeCalendar]" :locationByDataSet="locationDataSet"> </component>



            <div class="bg-gray p-2 " style="border-bottom: 1.5px solid #d3d3d3" v-if="lang">
                <a class="btn btn-dark me-2" @click="active('info')">{{ lang['information'] }}</a>
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
