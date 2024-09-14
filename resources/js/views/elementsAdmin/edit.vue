<script setup>
import {getCorrectFormPage} from "@/utils/getCorrectFormPage.js";
import {useRoute, useRouter} from "vue-router";
import {inject, provide} from "vue";
import Element from "@/layout/admin/element.vue";
import {communicationApi} from "@/utils/communicationApi.js";
import {changeAdminPagePathToApiPathForShowWithRemoveEditData} from "@/utils/changeAdminPagePathToApiPath.js";
import {getInputsForm} from "@/utils/formSend.js";


const route = useRoute();
const target = route.params.target;
const formComponent = getCorrectFormPage(target);
const lang = inject('lang');
const urlApi = changeAdminPagePathToApiPathForShowWithRemoveEditData(route.path);
const router = useRouter();
console.log(urlApi);
const communication = new communicationApi();

const data = communication.get(urlApi);

provide("dataForm", data);

setTimeout(() => {
    console.log(data)
}, 500)


async function edit(action = "") {
    const inputs = getInputsForm();

    const formData = new FormData(document.querySelector('form'));
    const inputFile = document.querySelector('[name="file"]');

//
   // formData.append('files', inputFile.files[0]);
  //  formData.append('name', "test");
    console.log(formData.get('file'));
    const {status, dataPut} = await communication.put(urlApi, formData)

    if (status === 200 && action === "exit") {
        setTimeout(() => {
            router.push({
                name: 'universal__index',
                params: {
                    target: target
                }
            })
        }, 500);
    }

}

async function deleteElement() {
    const status = await communication.delete(urlApi);


    if (status === 200) {
        setTimeout(() => {
            router.push({
                name: 'universal__index',
                params: {
                    target: target
                }
            })
        }, 500)
    }
}

</script>

<template>
    <element
        v-if="data !== null"
        :name="data.name"
        :id="data.id"
    >
        <template v-slot:formSlot>
            <component
                :is="formComponent"
            ></component>
        </template>

        <template v-slot:inputs>
            <RouterLink :to="{name:'universal__show', params: {target: target, id:data.id}}">
                <img src="/files/icons/view.png" class="pointer" alt="view" width="20" height="20"/>
            </RouterLink>
            <img src="/files/icons/save.png" class="pointer ms-2" alt="save" width="20" height="20" @click="edit"/>
            <img src="/files/icons/save_exit.png" class="pointer ms-2" alt="save and exit" width="24" height="24" @click="edit('exit')"/>
            <router-link :to="{name:'universal__create', params: {target: target}}">
                <img src="/files/icons/add.png" class="pointer ms-2" alt="create new" width="20" height="20" />
            </router-link>
            <img src="/files/icons/delete.png" class="pointer ms-2" alt="create new" width="20" height="20" @click="deleteElement" />
        </template>
    </element>

</template>

<style scoped>

</style>
