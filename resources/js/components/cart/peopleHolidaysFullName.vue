<script setup>
import {inject} from "vue";
defineProps([
    'vacationer',
    'book_id'
]);
const lang = inject('lang');
</script>

<template>

    <div class="d-flex align-items-center justify-content-center border-top-grayLight-1 py-2">
        <div>
            {{ lang['personal'] }}:&nbsp;<strong>{{ lang[vacationer.age] }}</strong>
        </div>

        <input type="hidden" :value="book_id" :name='`book_id[${vacationer.id ?? ""}]`'>
        <input type="hidden" :value="vacationer.age" :name='`age[${vacationer.id ?? ""}]`'>
        <div class="d-flex align-items-center mx-5">
            <label for="firstName" class="form-label m-0 p-0"><span>{{ lang['firstName'] }}:&nbsp;</span></label>
            <input type="text" class="form-control" id="firstName" :name='`firstName[${vacationer.id ?? ""}]`' :placeholder="lang['firstNameFake']" :value="vacationer.last_name ?? ''" data-form-main required>
        </div>
        <div class="d-flex align-items-center ms-2">
            <label for="lastName" class="form-label m-0 p-0">{{ lang['lastName'] }}:&nbsp;</label>
            <input type="text" class="form-control" id="lastName" :name='`lastName[${vacationer.id ?? ""}]`' :placeholder="lang['lastNameFake']" :value="vacationer.first_name ?? ''" data-form-main required>
        </div>
    </div>
</template>

<style scoped>

</style>
