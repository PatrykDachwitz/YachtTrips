<script setup>

import {inject} from "vue";

const lang = inject('lang');
</script>

<template>
    <form class="row g-3 p-3 d-none " data-show-form>

        <div class="col-md-5">
            <label for="validationCustom02" class="form-label">{{ lang['name'] }}</label>
            <input type="text" class="form-control" id="validationCustom02" name="name" data-form-main>
        </div>

        <div class="col-md-2">
            <label for="validationCustom03" class="form-label">{{ lang['premium'] }}</label>
            <select class="form-select" name="premium" aria-label="Default select example" id="validationCustom03" data-form-main>
                <option value="1">{{ lang['yes'] }}</option>
                <option value="0">{{ lang['no'] }}</option>
            </select>
        </div>

        <div class="col-md-5">
            <label for="validationCustom02" class="form-label">{{ lang['count_kids'] }}</label>
            <input type="text" class="form-control" id="validationCustom02" name="kids" data-form-main>
        </div>

        <div class="col-md-5">
            <label for="validationCustom02" class="form-label">{{ lang['count_adult'] }}</label>
            <input type="text" class="form-control" id="validationCustom02" name="adults" data-form-main>
        </div>

        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">{{ lang['double_beds'] }}</label>
            <input type="text" class="form-control" id="validationCustom02" name="double_beds" data-form-main>
        </div>

        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">{{ lang['single_beds'] }}</label>
            <input type="text" class="form-control" id="validationCustom02" name="single_beds" data-form-main>
        </div>

        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">{{ lang['kids_beds'] }}</label>
            <input type="text" class="form-control" id="validationCustom02" name="kids_beds" data-form-main>
        </div>

    </form>

</template>

<style scoped>

</style>
