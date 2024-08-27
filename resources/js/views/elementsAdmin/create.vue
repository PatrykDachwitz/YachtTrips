<script setup>
import {getCorrectFormPage} from "@/utils/getCorrectFormPage.js";
import {useRoute, useRouter} from "vue-router";
import {inject, onMounted, ref, watch, watchEffect} from "vue";
import Element from "@/layout/admin/element.vue";
import {
    changeAdminPagePathToApiPathForShowWithRemoveEditData
} from "@/utils/changeAdminPagePathToApiPath.js";
import {getInputsForm} from "@/utils/formSend.js";
import {communicationApi} from "@/utils/communicationApi.js";
import {formClear} from "@/utils/formClear.js";

const route = useRoute();
const formComponent = getCorrectFormPage(route.params.target);
const lang = inject('lang');
const urlPost = changeAdminPagePathToApiPathForShowWithRemoveEditData(route.path)
const communication = new communicationApi();
const router = useRouter();

async function create(action) {
    const inputs = getInputsForm();

    const {dataPost, errorPost, status} = await communication.post(urlPost, JSON.stringify(inputs));

  /*  console.log(dataPost);
    console.log(errorPost);
    console.log(status);*/
/*
    switch (action) {
        case "view":
            setTimeout(() =>{
                router.push({
                    name: 'universal__show',
                    params: {
                        target: route.params.target,
                        id: dataPost.id
                    }
                })
            }, 500)
            break;
        case "new":
            setTimeout(() =>{
                formClear();
            }, 500)

            break;
        case "exit":
            setTimeout(() =>{
                router.push({
                    name: 'universal__index',
                    params: {
                        target: route.params.target
                    }
                })
            }, 500)

            break;
        default:
            setTimeout(() =>{
                router.push({
                    name: 'universal__show',
                    params: {
                        target: route.params.target,
                        id: dataPost.id
                    }
                })
            }, 500)

            break;
    }
*/
}

</script>

<template>
    <element
        :name="lang['new'][route.params.target]"
        id=""
    >
        <template v-slot:formSlot>
            <component :is="formComponent"></component>
        </template>
        <template v-slot:inputs>
            <div>
                <img src="/files/icons/save_exit.png" class="pointer" alt="save and exit" width="24" height="24" @click="create('exit')"/>
                <img src="/files/icons/save_new.png" class="pointer ms-2" alt="save and create new" width="24" height="24" @click="create('new')" />
                <img src="/files/icons/save_view.png" class="pointer ms-2" alt="save" width="24" height="24" @click="create('view')" />
            </div>
        </template>
    </element>

</template>

<style scoped>

</style>
