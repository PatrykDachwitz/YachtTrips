<script setup>
import {communicationApi} from "@/utils/communicationApi.js";
import {changeAdminPagePathToApiPath} from "@/utils/changeAdminPagePathToApiPath.js";
import {inject, ref} from "vue";
import {useRoute} from "vue-router";
import NavBarElement from "@/layout/admin/navBarElement.vue";

const route = useRoute();
const id = ref(route.params.id);
const url = changeAdminPagePathToApiPath('/admin/rooms');
const urlPost = changeAdminPagePathToApiPath('/admin/combinations');
const communication = new communicationApi();
const rooms = communication.get(url);
const newCombinationsGenerate = ref([]);
const lang = inject('lang');
function addRoom(id) {
    const price = document.querySelector(`[name="price\[${id}\]"]`).value;
    const count = document.querySelector(`[name="count\[${id}\]"]`).value;
    newCombinationsGenerate.value.push({
        price: price,
        id: id,
        count: count,
    })
}


async function generatedCombination() {
    let request = {
     id: id.value,
     type: document.querySelector('[name="type"]').value,
     rooms: newCombinationsGenerate.value
    }

    const response = await communication.post(urlPost, JSON.stringify(request));

    console.log(response);
}
</script>

<template>

    <nav-bar-element
        :name="lang.generatedCombination"
    >
        <div class="d-flex">
            <select name="type" class="form-control" style="max-height: 40px">
                <option value="addNewWithoutCurrent">{{ lang['generatedCombinationAndDeleteOther'] }}</option>
                <option value="saveOnlyNew">{{ lang['addNewCombination'] }}</option>
            </select>

            <div class="ms-2" @click="generatedCombination">
                <button class="btn btn-warning">{{ lang['generated'] }}</button>
            </div>
        </div>
    </nav-bar-element>

    <div v-if="rooms !== null">
        <template v-for="room in rooms.data" :key="room.id">
            <div class="d-flex align-items-center justify-content-evenly p-3 rooms__container border-top-gray-1">
                <div class="rooms__name"><b>#{{ room.id }} {{ room.name }}</b></div>
                <div class="me-5">
                    <div>{{ lang['adult'] }}</div>
                    <div>{{ lang['singleBed'] }}: <b>{{ room.single_beds }}</b></div>
                    <div>{{ lang['doubleBed'] }}: <b>{{ room.double_beds }}</b></div>
                </div>
                <div class="me-5">
                    <div>{{ lang['kid'] }}</div>
                    <div>{{ lang['singleBed'] }}: <b>{{ room.kids_beds }}</b></div>
                </div>
                <div>
                    <label for="validationCustom03" class="form-label">{{ lang['count'] }}</label>
                    <input type="text" class="form-control" id="validationCustom03" :name="'count[' + room.id + ']'" value="100">
                </div>
                <div>
                    <label for="validationCustom02" class="form-label">{{ lang['supplement'] }}</label>
                    <div class="d-flex align-items-center"><input type="text" class="form-control" id="validationCustom02" :name="'price[' + room.id + ']'" value="100"> <b class="ms-2">{{ lang['pln'] }}</b></div>
                </div>
                <div @click="addRoom(room.id)">
                    <button class="btn btn-dark">{{ lang['addRoom'] }}</button>
                </div>
            </div>
        </template>

    </div>

</template>

<style scoped></style>
