<script setup>
import {inject, onMounted} from "vue";
import {useFetchDeleted} from "@/primary_function/useFetch.js";
defineProps([
    'product'
]);

const urlDeleteBooks = inject('urlDeleteBooks');
const lang = inject('lang');
const activeError = inject('activeError');
const urlApi = inject('urlApi');
function activeErrorInCart() {
    activeError.value = true;
    setTimeout(()=> {
        activeError.value = false;
    }, 500);
}
function deleteBook(idBook) {
    let date = new Date();
    let linkDeleteBook = `${urlDeleteBooks}${idBook}`;
    let { errors } = useFetchDeleted(linkDeleteBook);

    if (errors.value !== null) {
        activeErrorInCart();
    } else {
        urlApi.value += `?ts=${date.getTime()}`;
    }
}

</script>

<template>
    <div class="shadow-sm d-flex justify-content-between align-items-center border-grayLight-1 p-2 overflow-hidden rounded-2 mb-2">
        <div class="rounded-2 overflow-hidden">
            <picture>
                <source :srcset="product.trips.images_category[0].link_webp" type="image/webp"/>
                <img :src="product.trips.images_category[0].link_image" width="245" height="150" />
            </picture>
        </div>
        <div>
            <div>
                <strong class="px-3 fs-4">{{ product.trips.name }}</strong>
            </div>
            <div class="d-flex flex-column flex-xxl-row align-items-start justify-content-evenly w-100 px-3 align-items-xxl-center">
                <div>
                    {{ lang['deadline'] }}:&nbsp;<strong>{{ product.trips.start_travel }} - {{ product.trips.end_travel }}</strong>
                </div>
                <div>
                    {{ lang['numberRoom'] }}:&nbsp;<strong>{{ product.number_room }}</strong>
                </div>
                <div>
                    {{ lang['countPeople'] }}:&nbsp;<strong>{{ product.count_adult }} ({{ lang['adults'] }}), {{ product.count_kids }} ({{ lang['kid'] }})</strong>
                </div>

                <div>
                    {{ lang['price'] }}:&nbsp;&nbsp<strong>{{ product.price }} zł</strong>
                </div>
            </div>
        </div>
        <div class="btn btn-danger" @click="deleteBook(product.id)">
            {{ lang['delete'] }}
        </div>
    </div>
</template>

<style scoped>

</style>
