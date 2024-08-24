<script setup>
import {inject} from "vue";
import {useRoute} from "vue-router";

defineProps([
    'id',
    'name',
]);

const route = useRoute();
const target = route.params.target;

const lang = inject('lang');
</script>

<template>
    <div class="lists-single-element p-2  shadow-sm px-4">
        <div>
            <router-link
                :to="
                {
                    name: 'universal__edit',
                     params: {
                        target: target,
                        id: id
                    }
                }"
                class="fs-4 text-dark"
            >
                #{{ `${id} ${name}` }}
            </router-link>
        </div>
        <div>
            <router-link :to="
            {
                name: `universal__show`,
                 params: {
                    target: target,
                    id: id
                }
            }" class="text-dark fs-5 customBorder pe-2">
                {{ lang['views']['view'] }}
            </router-link>
            <router-link :to="
            {
                name: 'universal__edit',
                params: {
                    target: target,
                    id: id
                }
            }" class="text-dark fs-5 mx-2 pe-2 customBorder">
                {{ lang['views']['edit'] }}
            </router-link>
        </div>
    </div>
</template>

<style scoped>
a {
    text-decoration: none;
    cursor: pointer;
}
</style>
