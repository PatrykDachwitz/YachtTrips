<script setup>
import NavBarElement from "@/layout/admin/navBarElement.vue";
import {inject, onMounted} from "vue";
import {selectOtherOption} from "@/utils/dashboardNavBarFunction.js";
import {completeDataForm} from "@/utils/completeDataForm.js";
import data from "bootstrap/js/src/dom/data.js";
import DragDropFiles from "@/components/admin/dragDropFiles.vue";
import CombinationRooms from "@/components/admin/combinationRooms.vue";


defineProps([
    'name',
    'id',
    'data'
]);

const lang = inject('lang');
const dataForm = inject('dataForm');

onMounted(() => {
   /* if (dataForm !== null) {
        console.log(dataForm)
        completeDataForm(dataForm.value);
    }*/

})

function testDragOne(e) {
    e.preventDefault();
   // console.log(e)
}

function testDragSecond(e) {
    e.preventDefault();
  //  console.log(e)
}

function testDrop(e) {
    e.preventDefault();
    console.log(e.dataTransfer.files)
}
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
        <a class="btn btn-dark" @click="selectOtherOption('media')">{{ lang['media'] }}</a>
        <a class="btn btn-dark" @click="selectOtherOption('rooms')">Dostępne pokoje</a>
    </div>

    <form data-form>
        <div data-show-form-container data-content-show="info">
            <slot name="formSlot"></slot>
        </div>

        <div data-show-form-container class="p-4 d-none" data-content-show="content">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">{{ lang['contents'] }}</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="height: 100%" name="description"></textarea>
            </div>
        </div>
        <div class="p-5 d-none" data-content-show="media">

                <div style="border-bottom: 1.5px solid #d3d3d3">
                    <drag-drop-files></drag-drop-files>
                </div>
                <div v-if="data !== null" class="d-flex flex-column">
                    <div class="my-2 d-flex justify-content-between align-items-center" v-for="image in dataForm.images" :key="image.id">
                        <div>
                            <picture>
                                <source :srcset="image.link_webp" type="image/webp">
                                <img loading="lazy" :src="image.link_image" width="100">
                            </picture>
                        </div>
                        <div>
                            {{ image.name }}
                        </div>

                        <div>
                            Typ: {{ image.pivot.device }}
                        </div>

                        <button class="btn btn-danger d-flex align-items-center">
                            <img src="/files/icons/delete.png" width="20" height="20">
                        </button>
                    </div>
                </div>
        </div>

        <div data-content-show="rooms">
            <combinationRooms></combinationRooms>
        </div>
    </form>
</template>

<style scoped></style>
