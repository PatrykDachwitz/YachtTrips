<script setup>
import {inject} from "vue";
defineProps([
    'vacationer',
    'id',
    'book_id'
]);
const lang = inject('lang');
</script>

<template>

    <div class="d-flex align-items-center justify-content-center border-top-grayLight-1 py-2" data-vacationer-content>
        <div>
            {{ lang['personal'] }}:&nbsp;<strong>{{ lang[vacationer.age] }}</strong>
        </div>
        <template v-if="vacationer.id !== undefined">
            <input type="hidden" name='id' :value="vacationer.id" />
        </template>
        <input type="hidden" :value="vacationer.age" name='age' :data-book-id="book_id" :data-vacationer-id="id">
        <input type="hidden" :value="book_id" name='book_id' :data-book-id="book_id" :data-vacationer-id="id">
        <div class="d-flex align-items-center mx-5 flex-column">
            <div class="d-flex align-items-center">
                <label for="firstName" class="form-label m-0 p-0"><span>{{ lang['firstName'] }}:&nbsp;</span></label>
                <input type="text" class="form-control" id="firstName" name='first_name' :placeholder="lang['firstNameFake']" :data-book-id="book_id" :data-vacationer-id="id" :value="vacationer.last_name ?? ''" data-form-main required>
            </div>
        </div>
        <div class="d-flex align-items-center ms-2 flex-column">
            <div class="d-flex align-items-center">
                <label for="lastName" class="form-label m-0 p-0">{{ lang['lastName'] }}:&nbsp;</label>
                <input type="text" class="form-control" id="lastName" name='last_name' :placeholder="lang['lastNameFake']" :data-book-id="book_id" :data-vacationer-id="id" :value="vacationer.first_name ?? ''" data-form-main required>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
