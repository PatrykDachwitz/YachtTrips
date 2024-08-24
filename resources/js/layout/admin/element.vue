<script setup>
import NavBarElement from "@/layout/admin/navBarElement.vue";
import {inject, onMounted} from "vue";
import {selectOtherOption} from "@/utils/dashboardNavBarFunction.js";
import {completeDataForm} from "@/utils/completeDataForm.js";
import data from "bootstrap/js/src/dom/data.js";


defineProps([
    'name',
    'id',
    'data'
]);

const lang = inject('lang');
const dataForm = inject('dataForm');

onMounted(() => {
    if (dataForm !== null) {
        console.log(dataForm)
        completeDataForm(dataForm.value);
    }

})
</script>

<template>

    <nav-bar-element
        :id="id"
        :name="name">

    <slot name="inputs">

    </slot>
    </nav-bar-element>

    <div class="bg-gray p-2 " style="border-bottom: 1.5px solid #d3d3d3" v-if="lang">
        <a class="btn btn-dark me-2" @click="selectOtherOption('info')">{{ lang['information'] }}</a>
        <a class="btn btn-dark" @click="selectOtherOption('content')">{{ lang['contents'] }}</a>
    </div>

    <form data-form>
        <div data-show-form-container class="" data-content-show="info">
            <slot name="formSlot"></slot>
        </div>

        <div data-show-form-container class="p-4 d-none" data-content-show="content">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">{{ lang['contents'] }}</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="height: 100%" name="description"></textarea>
            </div>
        </div>
        <div class="p-5 d-none" data-content-show="media">
        <!--
                <div style="border-bottom: 1.5px solid #d3d3d3">
                    <button class="btn btn-outline-dark btn-add" @click="editViewActive = true"><strong>+</strong></button>
                    {{ lang['graphics'] }}
                </div>
                <div v-if="data !== null">
        &lt;!&ndash;            <image-form class="graphic-container py-4"  v-for="image in data.images" :image="image" :key="image.id" />&ndash;&gt;
                </div>

                <div>
        &lt;!&ndash;            <image-form class="graphic-container py-4"  v-for="file in selectImage" :image="file" :key="file.id" />&ndash;&gt;
                </div>
        -->

        </div>
    </form>
</template>

<style scoped></style>
