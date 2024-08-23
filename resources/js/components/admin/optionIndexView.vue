<script setup>
import {inject} from "vue";

defineProps([
    'id',
    'name',
    'url-delete',
    'routeParentName',
]);

const lang = inject('lang');
</script>

<template>
    <div class="lists-single-element p-2  shadow-sm px-4">
        <div>
            <router-link
                :to="{name: `${routeParentName}-edit`, params: {
                    id
                }}"
                class="fs-4 text-dark"
            >
                #{{ `${id} ${name}` }}
            </router-link>
        </div>
        <div>
            <router-link :to="{name: `${routeParentName}-show`, params: {
                    id
                }}" class="text-dark fs-5 customBorder pe-2">
                {{ lang['views']['view'] }}
            </router-link>
            <router-link :to="{name: `${routeParentName}-edit`, params: {
                    id
                }}" class="text-dark fs-5 mx-2 pe-2 customBorder">
                {{ lang['views']['edit'] }}
            </router-link>
            <a class="text-dark fs-5" @click="useFetchDeletedCustom(id)">
                {{ lang['views']['delete'] }}
            </a>
        </div>
    </div>
</template>

<style scoped>
a {
    text-decoration: none;
    cursor: pointer;
}
</style>
