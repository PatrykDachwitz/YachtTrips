<script setup>

import {useRoute, useRouter} from "vue-router";
import {inject} from "vue";

const route = useRoute();

const router = useRouter();

console.log(route.params);
console.log(router);
const lang = inject('lang');
</script>

<template>
    <form class="row g-3 p-3" data-show-form>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">{{ lang['trip_id'] }}</label>
            <input type="text" class="form-control" id="validationCustom02" name="trip_id" data-form-main>
        </div>

        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">{{ lang['order_id'] }}</label>
            <input type="text" class="form-control" id="validationCustom02" name="order_id" data-form-main>
        </div>

        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">{{ lang['number_room'] }}</label>
            <input type="text" class="form-control" id="validationCustom02" name="number_room" data-form-main>
        </div>

        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">{{ lang['price'] }}</label>
            <input type="text" class="form-control" id="validationCustom02" name="price" data-form-main>
        </div>

        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">{{ lang['count_adult'] }}</label>
            <input type="text" class="form-control" id="validationCustom02" name="count_adult" data-form-main>
        </div>

        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">{{ lang['count_kids'] }}</label>
            <input type="text" class="form-control" id="validationCustom02" name="count_kids" data-form-main>
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
