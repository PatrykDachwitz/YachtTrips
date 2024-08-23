<script setup>
import {inject} from "vue";

defineProps([
    'name',
    'children'
])

const lang = inject('lang');
</script>

<template>
    <div class="btn btn-toggle d-inline-flex align-items-center rounded border-0 fs-5 ps-0 collapsed" data-bs-toggle="collapse" :data-bs-target="`#${name}`" aria-expanded="false">
        <picture>
            <source :srcset="`/files/icons/${name}.webp`" type="image/webp">
            <img :src="`/files/icons/${name}.png`" :alt="name" class="me-2" width="30" height="30">
        </picture>
        {{ lang['menu'][name] }}
    </div>
    <div class="collapse ms-2" :id="name" style="">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ms-4">
            <li v-for="childElement in children">
                <router-link :to="{ name: 'universal__index', params: { target: `${childElement}`} }" class="link-body-emphasis d-inline-flex text-decoration-none rounded fs-6">{{ lang[`menu`][childElement] }}</router-link>
            </li>
        </ul>
    </div>
</template>

<style scoped>

</style>
