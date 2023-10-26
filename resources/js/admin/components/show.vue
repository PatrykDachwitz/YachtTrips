<script setup>
import { ref, provide } from 'vue'
import { useFetch, getUrl } from "../../primary_function/useFetch.js";
import dashboard from "@/admin/components/dashboard.vue";
import optionList from "@/admin/components/list/optionList.vue";

const { url, urlApi } = getUrl();
const { date, error } = useFetch(urlApi);

provide('urlApiCurrent', urlApi);

</script>

<template>

    <dashboard
        name="Lista"
    >
        <div class="bg-gray p-2 " style="border-bottom: 1.5px solid #d3d3d3">
            <a class="btn btn-dark">Informacje</a>
            <a class="btn btn-dark mx-2">Media</a>
            <a class="btn btn-dark">Kontent</a>
        </div>
        <form class="row g-3 p-3">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nazwa</label>
                <input type="email" class="form-control" id="inputEmail4" name="name">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Aktywny</label>
                <input type="text" name="active" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Kategoria</label>
                <input type="text" name="category_banner_id" class="form-control" id="inputAddress">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Start baneru</label>
                <input type="text" class="form-control" id="inputAddress2" name="">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div>

        </form>
    </dashboard>
</template>

<style scoped>
div.lists {
    flex: 1;
}
</style>
