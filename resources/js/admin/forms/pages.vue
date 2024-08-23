<script setup>

import {inject} from "vue";

const lang = inject('lang')
</script>

<template>
    <form class="row g-3 p-3" data-show-form>
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">{{ lang['name'] }}</label>
            <input type="email" class="form-control" id="validationCustom02" name="name" data-form-main>
        </div>

        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">{{ lang['slug'] }}</label>
            <input type="text" class="form-control" id="validationCustom02" name="slug" data-form-main>
        </div>

        <div class="col-md-2">
            <label for="validationCustom03" class="form-label">{{ lang['active'] }}</label>
            <select class="form-select" name="active" aria-label="Default select example" id="validationCustom03" data-form-main>
                <option value="1">{{ lang['yes'] }}</option>
                <option value="0">{{ lang['no'] }}</option>
            </select>
        </div>

    </form>

</template>

<style scoped>

</style>
