<script setup>
import { inject, ref } from "vue";
import CartContent from "@/components/cart/cartContent.vue";

const lang = inject('lang');
const order = inject('order');

</script>

<template>
    <cart-content>
        <span class="fs-2"><strong>{{  lang['personalDataContact'] }}</strong></span>

        <form class="row g-3" data-cart-personal-data-form>
            <div class="col-md-6">
                <label for="personal_first_name" class="form-label">{{  lang['firstName'] }}*</label>
                <input type="text" class="form-control" id="personal_first_name" name='personal_first_name' :placeholder="lang['firstNameFake']" :value="order.personal_first_name" data-form-main required>
            </div>
            <div class="col-md-6">
                <label for="personal_last_name" class="form-label">{{  lang['lastName'] }}*</label>
                <input type="text" class="form-control" :value="order.personal_last_name" id="personal_last_name" name='personal_last_name' :placeholder="lang['lastNameFake']" data-form-main required>
            </div>

            <div class="col-md-6">
                <label for="personal_mail" class="form-label">{{  lang['email'] }}*</label>
                <input type="text" :value="order.personal_mail" class="form-control" id="personal_mail" name='personal_mail' :placeholder="lang['emailFake']" data-form-main required>
            </div>
            <div class="col-md-6">
                <label for="personal_phone" class="form-label">{{  lang['numberPhone'] }}*</label>
                <input type="text" :value="order.personal_phone" class="form-control" id="personal_phone" name='personal_phone' :placeholder="lang['numberPhoneFake']" data-form-main required>
            </div>

            <div class="col-md-12">
                <label for="address" class="form-label">{{  lang['correspondenceAddress'] }}*</label>
                <input :value="order.address" type="text" class="form-control" id="address" name='address' :placeholder="lang['streetFake']" data-form-main required>
            </div>


            <div class="col-12">
                <label for="additional_content" class="form-label">{{  lang['additionalContent'] }}</label>
                <textarea class="form-control" :value="order.additional_content" id="additional_content" name='additional_content' :placeholder="lang['additionalContentFake']" data-form-main required></textarea>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" name="checked_rule" value="1" type="checkbox" id="flexCheckDefault" data-form-main required>
                    <label class="form-check-label" for="flexCheckDefault">
                        {{ lang['checkedRules'] }}*
                    </label>
                </div>
            </div>
            <div class="fs-6 mt-2">
                {{ lang['requiredInput'] }}
            </div>

        </form>
    </cart-content>
</template>

<style scoped>

</style>
