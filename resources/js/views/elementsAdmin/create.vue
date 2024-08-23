<script setup>
import {getCorrectFormPage} from "@/utils/getCorrectFormPage.js";
import {useRoute} from "vue-router";
import {inject} from "vue";
import Element from "@/layout/admin/element.vue";

const route = useRoute();
const formComponent = getCorrectFormPage(route.params.target);
const lang = inject('lang');

</script>

<template>
    <element
        name="test"
        id="123"
    >
        <template v-slot:formSlot>
            <component :is="formComponent"></component>
        </template>
        <template v-slot:inputs>
            <div>
                <img src="/files/icons/save.png" class="pointer" alt="save" width="20" height="20" @click="formController.create()"/>
            </div>
        </template>
    </element>

</template>

<style scoped>

</style>
