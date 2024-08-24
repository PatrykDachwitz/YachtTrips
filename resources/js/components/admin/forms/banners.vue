<script setup>
import {inject} from "vue";
import {useRoute, useRouter} from "vue-router";
import {changeAdminPagePathToApiPath} from "@/utils/changeAdminPagePathToApiPath.js";
import {communicationApi} from "@/utils/communicationApi.js";
import SelectInputWithOptionByApi from "@/components/admin/selectInputWithOptionByApi.vue";

const lang = inject('lang');
const router = useRouter();

const urlBannersCategory = changeAdminPagePathToApiPath(router.resolve({
    name: 'universal__index',
    target: "categoriesBanner"
}).fullPath);

const communication = new communicationApi();
const availableOptionsCategoryBanner = communication.get(urlBannersCategory);

</script>

<template>
    <div class="row g-3 p-3">
        <div class="col-md-10">
            <label for="validationCustom02" class="form-label">{{ lang['name'] }}</label>
            <input type="email" class="form-control" id="validationCustom02" name="name" data-form-main>
        </div>

        <div class="col-md-2">
            <label for="validationCustom03" class="form-label">{{ lang['active'] }}</label>
            <select class="form-select" name="active" aria-label="Default select example" id="validationCustom03" data-form-main>
                <option value="1">{{ lang['yes'] }}</option>
                <option value="0">{{ lang['no'] }}</option>
            </select>
        </div>

        <div class="col-md-4">
            <label for="start_at" class="form-label">{{ lang['startView'] }}</label>
            <div class="position-relative">
                <input type="date" class="form-control" id="created_at" name="start_at" style="background-position: right calc(2.4em + 0.1875rem) center;"  data-form-main>
            </div>
        </div>
        <div class="col-md-4">
            <label for="finish_at" class="form-label">{{ lang['endView'] }}</label>
            <div class="position-relative">
                <input type="date" class="form-control" id="created_at" name="finish_at" style="background-position: right calc(2.4em + 0.1875rem) center;"  data-form-main>
            </div>
        </div>

        <div class="col-md-4">
            <label for="category_banner_id" class="form-label">{{ lang['active'] }}</label>
            <select-input-with-option-by-api
                v-if="availableOptionsCategoryBanner !== null"
                name="category_banner_id"
                :data="availableOptionsCategoryBanner"
            >
            </select-input-with-option-by-api>
        </div>
    </div>

</template>

<style scoped>

</style>
