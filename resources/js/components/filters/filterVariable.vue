<script setup>
import {inject, ref} from "vue";

defineProps([
    'variables',
    'nameInput',
])

const optionExpansion = ref(false);
const lang = inject('lang');
</script>

<template>
    <div v-if="variables !== null">
        <template v-for="(variable, index) in variables">
            <div :class="'form-check ' + [index > 3 && optionExpansion !== true ? 'd-none' : 'd-false']" >
                <input class="form-check-input" type="checkbox" :value="variable.id" :name="`${nameInput}[]`" :data-ocean-id="variable.id">
                <label class="form-check-label" :data-ocean-id="variable.id">
                    {{ variable.name }}
                </label>
            </div>
        </template>
        <div class="text-center fs-5 text-dark pointer" v-if="variables.length > 4 && optionExpansion !== true" @click="optionExpansion = true">
            {{ lang['optionsExpansion']}}
        </div>
        <div class="text-center fs-5 text-dark pointer" v-if="variables.length > 4 && optionExpansion === true" @click="optionExpansion = false">
            {{ lang['optionsNotExpansion']}}
        </div>
        <hr class="hr"/>
    </div>
</template>

<style scoped>

</style>
