<script setup>
import {inject} from "vue";
import SelectInputWithOptionByApi from "@/components/admin/selectInputWithOptionByApi.vue";
import {communicationApi} from "@/utils/communicationApi.js";

const lang = inject('lang');

const urlYachts = changeAdminPagePathToApiPath(router.resolve({
    name: 'universal__index',
    target: "yachts"
}).fullPath);
const urlOceans = changeAdminPagePathToApiPath(router.resolve({
    name: 'universal__index',
    target: "yachts"
}).fullPath);
const urlTemplates = changeAdminPagePathToApiPath(router.resolve({
    name: 'universal__index',
    target: "yachts"
}).fullPath);

const communication = new communicationApi();
const availableOptionsYacht = communication.get(urlYachts);
const availableOptionsOcean = communication.get(urlOceans);
const availableOptionsTemplate = communication.get(urlTemplates);

</script>

<template>
    <div class="row g-3 p-3 d-none" data-show-form>
        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">{{ lang['name'] }}</label>
            <input type="email" class="form-control" id="inputEmail4" name="name" data-form-main>
        </div>

        @csrf

        <div class="col-md-4">
            <label for="start_day" class="form-label">{{ lang['startDay'] }}</label>
            <div class="position-relative">
                <input type="text" class="form-control" id="created_at" name="start_day" style="background-position: right calc(2.4em + 0.1875rem) center;"  data-form-main>
                <picture>
                    <source srcset="/files/icons/calendar.webp" type="image/webp"/>
                    <img src="/files/icons/calendar.png" width="25" height="25" class="position-absolute  top-0 end-0 mt-1 me-2 calendars-input"   data-calendar-input="start_day"/>
                </picture>
            </div>
        </div>

        <div class="col-md-4">
            <label for="end_day" class="form-label">{{ lang['endDay'] }}</label>
            <div class="position-relative">
                <input type="date" class="form-control" id="created_at" name="end_day" style="background-position: right calc(2.4em + 0.1875rem) center;"  data-form-main>
            </div>
        </div>

        <div class="col-md-4">
            <label for="count_day" class="form-label">{{ lang['countDay'] }}</label>
            <input type="text" class="form-control" id="count_day" name="count_day" data-form-main>
        </div>


        <div class="col-md-4">
            <label for="ocean_id" class="form-label">{{ lang['ocean'] }}</label>
            <select-input-with-option-by-api
                v-if="availableOptionsOcean !== null"
                name="ocean_id"
                :data="availableOptionsOcean"
            >
            </select-input-with-option-by-api>

        </div>

        <div class="col-md-4">
            <label for="yacht_id" class="form-label">{{ lang['yacht'] }}</label>
            <select-input-with-option-by-api
                v-if="availableOptionsYacht !== null"
                name="yacht_id"
                :data="availableOptionsYacht"
            >
            </select-input-with-option-by-api>
        </div>
        <div class="col-md-4">
            <label for="template_id" class="form-label">{{ lang['template'] }}</label>
            <select-input-with-option-by-api
                v-if="availableOptionsTemplate !== null"
                name="template_id"
                :data="availableOptionsTemplate"
            >
            </select-input-with-option-by-api>
        </div>


    </div>

</template>

<style scoped>

</style>
