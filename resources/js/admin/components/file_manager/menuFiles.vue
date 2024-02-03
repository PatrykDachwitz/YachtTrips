<script setup>
import {inject, provide, ref} from "vue";


import InputTextMenu from "@/admin/components/file_manager/input_menu/inputTextMenu.vue";
import InputDeletedMenu from "@/admin/components/file_manager/input_menu/inputDeletedMenu.vue";
import SelectMenu from "@/admin/components/file_manager/input_menu/selectMenu.vue";
const settings = ref({});
const details = inject('details');
const availableOptions = {
    InputDeletedMenu,
    InputTextMenu,
    SelectMenu,
}
const lang = inject('lang');
const actualSelectOptionsInMenu = ref('empty');
provide('actualSelectOptionsInMenu', actualSelectOptionsInMenu);
provide('settings', settings);

function activeCorrectOptions(optionsMenu) {
    details.value.active = false;
    switch (optionsMenu) {
        case "newFolder":
            actualSelectOptionsInMenu.value = 'InputTextMenu'
            settings.value = {
                inputs: [
                    'folder'
                ],
                action: "create"
            }
            break;
        case "changeLocation":
            actualSelectOptionsInMenu.value = 'SelectMenu'
            break;
        case "updateName":
            actualSelectOptionsInMenu.value = 'InputTextMenu'
            settings.value = {
                inputs: [
                    'name'
                ],
                action: "update"
            }
            break;
        case "InputDeletedMenu":
            actualSelectOptionsInMenu.value = 'InputDeletedMenu'
            break;
    }
}

</script>

<template>
    <component :is="availableOptions[actualSelectOptionsInMenu]" style="left:0 !important;top: 0 !important;"></component>

    <div class="position-absolute bg-gray border-gray-1 menuFile px-3 py-2 d-flex flex-column rounded-2 shadow-sm" :style="`top: ${parseInt(details.pageY) ?? 0}px; left: ${parseInt(details.pageX) ?? 0}px`" v-if="details.active === true">
        <strong class="pointer"
            @click="activeCorrectOptions('newFolder')"
            >{{ lang['newFolder'] }}</strong>
        <hr class="hr my-1 py-0" /><strong class="pointer"
            @click="activeCorrectOptions('changeLocation')"
            >{{ lang['changeLocationFile'] }}</strong>
        <hr class="hr my-1 py-0" />
        <strong class="pointer"
            @click="activeCorrectOptions('updateName')"
            >{{ lang['changeName'] }}</strong>
        <hr class="hr my-1 py-0" />
        <strong class="pointer"
           @click="activeCorrectOptions('inputDeletedMenu')"
        >{{ lang['deleteFile'] }}</strong>
        <hr class="hr my-1 py-0" />
        <strong class="pointer" @click="details.active = false;">{{ lang['closeMenu'] }}</strong>
    </div>
</template>

<style scoped>
.menuFile {
    z-index: 999;
}
</style>
