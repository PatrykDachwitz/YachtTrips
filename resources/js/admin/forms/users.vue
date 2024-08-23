<script setup>
import {inject} from "vue";

const lang = inject('lang');
</script>

<template>
    <form class="row g-3 p-3 d-none " data-show-form>
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">{{ lang['name'] }}</label>
            <input type="text" class="form-control" id="validationCustom02" name="name" data-form-main>
        </div>

        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">{{ lang['email'] }}</label>
            <input type="email" class="form-control" id="validationCustom02" name="email" data-form-main>
        </div>


        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">{{ lang['password'] }}</label>
            <input type="password" class="form-control" id="validationCustom02" name="password" placeholder="******" data-form-main>
        </div>

        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">{{ lang['passwordConfirmed'] }}</label>
            <input type="password" class="form-control" id="validationCustom02" name="password_confirmation" placeholder="******" data-form-main>
        </div>

        <div class="col-md-3">
            <label for="validationCustom02" class="form-label">{{ lang['security'] }}</label>
            <input type="text" class="form-control" id="validationCustom02" name="security" data-form-main>
        </div>

        <div class="col-md-3">
            <label for="validationCustom02" class="form-label">{{ lang['superAdmin'] }}</label>
            <select class="form-select" name="super_admin" data-form-main>
                <option value="0" selected>{{ lang['no'] }}</option>
                <option value="1">{{ lang['yes'] }}</option>
            </select>
        </div>


    </form>

</template>

<style scoped>

</style>
