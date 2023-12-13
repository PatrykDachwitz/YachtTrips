<script setup>
import {inject} from "vue";
defineProps([
    'age',
    'book_id'
]);
const lang = inject('lang');
</script>

<template>

    <div class="d-flex align-items-center justify-content-center border-top-grayLight-1 py-2">
        <div>
            {{ lang['personal'] }}:&nbsp;<strong>{{ lang[age] }}</strong>
        </div>

        <div class="d-flex align-items-center mx-5">
            <label for="firstName" class="form-label m-0 p-0"><span>{{ lang['firstName'] }}:&nbsp;</span></label>
            <input type="text" class="form-control" id="firstName" :name='`firstName[${book_id}][${age}]`' :placeholder="lang['firstNameFake']" required>
        </div>
        <div class="d-flex align-items-center ms-2">
            <label for="lastName" class="form-label m-0 p-0">{{ lang['lastName'] }}:&nbsp;</label>
            <input type="text" class="form-control" id="lastName" :name='`lastName[${book_id}][${age}]`' :placeholder="lang['lastNameFake']" required>
        </div>
    </div>
</template>

<style scoped>

</style>
