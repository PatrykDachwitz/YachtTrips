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
    <form class="row g-3 p-3 d-none" data-show-form>
        <div class="col-md-10">
            <label for="inputEmail4" class="form-label">{{ lang['name'] }}</label>
            <input type="email" class="form-control" id="inputEmail4" name="name" data-form-main>
        </div>

        @csrf
    </form>


</template>

<style scoped>

</style>
