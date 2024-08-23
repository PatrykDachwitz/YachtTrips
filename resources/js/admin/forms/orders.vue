<script setup>

import {inject} from "vue";

const lang = inject('lang');
</script>

<template>
    <form class="row g-3 p-3" data-show-form>

        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">{{ lang['session_id'] }}</label>
            <input type="text" class="form-control" id="validationCustom02" name="session_id" data-form-main>
        </div>

        <div class="col-md-3">
            <label for="validationCustom02" class="form-label">{{ lang['status'] }}</label>
            <input type="text" class="form-control" id="validationCustom02" name="status" data-form-main>
        </div>

        <div class="col-md-3">
            <label for="validationCustom02" class="form-label">{{ lang['price'] }}</label>
            <input type="text" class="form-control" id="validationCustom02" name="price" data-form-main>
        </div>

        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">{{ lang['personal_first_name'] }}</label>
            <input type="text" class="form-control" id="validationCustom02" name="personal_first_name" data-form-main>
        </div>

        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">{{ lang['personal_last_name'] }}</label>
            <input type="text" class="form-control" id="validationCustom02" name="personal_last_name" data-form-main>
        </div>

        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">{{ lang['personal_mail'] }}</label>
            <input type="email" class="form-control" id="validationCustom02" name="personal_mail" data-form-main>
        </div>

        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">{{ lang['personal_phone'] }}</label>
            <input type="text" class="form-control" id="validationCustom02" name="personal_phone" data-form-main>
        </div>

        <div class="col-md-2">
            <label for="validationCustom03" class="form-label">{{ lang['checkedRules'] }}</label>
            <select class="form-select" name="checked_rules" aria-label="Default select example" id="validationCustom03" data-form-main>
                <option value="1">{{ lang['yes'] }}</option>
                <option value="0">{{ lang['no'] }}</option>
            </select>
        </div>
        <div class="col-md-12">
            <label for="validationCustom02" class="form-label">{{ lang['address'] }}</label>
            <input type="text" class="form-control" id="validationCustom02" name="address" data-form-main>
        </div>

        <div class="col-md-12">
            <label for="validationCustom02" class="form-label">{{ lang['correspondenceAddress'] }}</label>
            <input type="text" class="form-control" id="validationCustom02" name="correspondenceAddress" data-form-main>
        </div>
        <div class="col-md-12">
            <div class="form-check">
                <input class="form-check-input" name="checked_rule" value="1" type="checkbox" id="flexCheckDefault" data-form-main required>
                <label class="form-check-label" for="flexCheckDefault">
                    {{ lang['checkedRules'] }}
                </label>
            </div>
        </div>

    </form>


</template>

<style scoped>

</style>
