<script setup>
import { inject, ref } from "vue";
import CartContent from "@/components/cart/cartContent.vue";

const lang = inject('lang');
</script>

<template>
    <cart-content>
        <span class="fs-2"><strong>{{  lang['personalData'] }}</strong></span>

        <form class="row g-3">
            <div class="col-md-6">
                <label for="firstName" class="form-label">{{  lang['firstName'] }}</label>
                <input type="text" class="form-control" id="firstName" name="firstName" :placeholder="lang['firstNameFake']" required>
            </div>
            <div class="col-md-6">
                <label for="lastName" class="form-label">{{  lang['lastName'] }}</label>
                <input type="text" class="form-control" id="lastName" name="lastName" :placeholder="lang['lastNameFake']" required>
            </div>

            <div class="col-md-6">
                <label for="firstName" class="form-label">{{  lang['email'] }}</label>
                <input type="text" class="form-control" id="firstName" name="firstName" :placeholder="lang['emailFake']" required>
            </div>
            <div class="col-md-6">
                <label for="firstName" class="form-label">{{  lang['numberPhone'] }}</label>
                <input type="text" class="form-control" id="firstName" name="firstName" :placeholder="lang['numberPhoneFake']" required>
            </div>
            <div class="col-md-5">
                <label for="lastName" class="form-label">{{  lang['street'] }}</label>
                <input type="text" class="form-control" id="lastName" name="lastName" :placeholder="lang['streetFake']" required>
            </div>
            <div class="col-md-2">
                <label for="lastName" class="form-label">{{  lang['postalCode'] }}</label>
                <input type="text" class="form-control" id="lastName" name="lastName" :placeholder="lang['postalCodeFake']" required>
            </div>

            <div class="col-md-5">
                <label for="email" class="form-label">{{  lang['city'] }}</label>
                <input type="email" class="form-control" id="email" name="email" :placeholder="lang['cityFake']" required>
            </div>

            <div class="col-12">
                <label for="contents" class="form-label">{{  lang['additionalContent'] }}</label>
                <textarea class="form-control" id="contents" name="contents" :placeholder="lang['additionalContentFake']" required></textarea>
            </div>
            <div class="fs-6 mt-2">
                {{ lang['requiredInput'] }}
            </div>

        </form>
    </cart-content>
</template>

<style scoped>

</style>
