<script setup>
import { inject, ref } from "vue";
import CartContent from "@/components/cart/cartContent.vue";

const lang = inject('lang');
</script>

<template>
    <cart-content>
        <span class="fs-2"><strong>{{ lang['holidaysMarketsData'] }}</strong></span>
        <div class="d-flex flex-column mt-3">

            <div class="shadow-sm d-flex justify-content-between align-items-center border-grayLight-1 p-2 overflow-hidden rounded-2 mb-2">

                <div class="fs-5">
                    <strong>Wyceiczka na karaiby</strong>
                </div>
                <div>
                    {{ lang['personal'] }}:&nbsp;<strong>dorosła</strong>
                </div>

                <div class="d-flex align-items-center">
                    <label for="firstName" class="form-label m-0 p-0"><span>{{ lang['firstName'] }}:&nbsp;</span></label>
                    <input type="text" class="form-control" id="firstName" name="firstName[]" :placeholder="lang['firstNameFake']" required>
                </div>
                <div class="d-flex align-items-center ms-2">
                    <label for="firstName" class="form-label m-0 p-0">{{ lang['lastName'] }}:&nbsp;</label>
                    <input type="text" class="form-control" id="firstName" name="lastName[]" :placeholder="lang['lastNameFake']" required>
                </div>

            </div>
        </div>
    </cart-content>
</template>

<style scoped>

</style>
