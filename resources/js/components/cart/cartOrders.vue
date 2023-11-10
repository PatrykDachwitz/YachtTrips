<script setup>
import { inject, ref } from "vue";

const lang = inject('lang');


</script>

<template>
    <div class="bg-gray rounded-2 overflow-hidden shadow-sm p-3 border-grayLight-1 d-flex flex-column align-items-center align-items-lg-start">
        <span class="fs-3"><strong>{{ lang['summary'] }}</strong></span>
        <hr class="my-1 hr"/>
        <div class="d-none d-lg-block">
            <span class="fs-5">{{ lang['products'] }}</span>

            <ul class="list-unstyled fs-6 my-1">
                <li>Wycieczka 1:&nbsp;<strong>120 zł</strong></li>
                <li>Wycieczka 1:&nbsp;<strong>120 zł</strong></li>
                <li>Wycieczka 1:&nbsp;<strong>120 zł</strong></li>
                <li>Wycieczka 1:&nbsp;<strong>120 zł</strong></li>
            </ul>
            <hr class="my-1"/>
        </div>
        <span class="fs-5">{{ lang['summaryProducts'] }}:&nbsp;<strong>240zł</strong></span>

    </div>
</template>

<style scoped>
.hr {
    @media only screen and (max-width: 991px) {
        min-height: 1px;
        min-width: 50%;
    }
}
</style>
