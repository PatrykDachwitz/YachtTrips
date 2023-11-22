<script setup>


import {inject, ref} from "vue";


console.error('test23');


const lang = inject('language');
</script>

<template>
    <div class="contents row contents-proucts g-3 mb-3 mx-2 mx-lg-4"><div class="col-6 col-md-4 col-lg-3 col-xxl-2">
        <div class=" shadow rounded-2 overflow-hidden shadow-sm">

            <div>
                <picture>
                    <img src="http://127.0.0.1/slide1.jpg" width="245" height="150" class="w-100"/>
                </picture>
            </div>

            <div class="p-2 d-flex ocean-content flex-column justify-content-between">
                <p class="fs-5 mb-0">
                    Nazwa
                </p>
                <div class="w-100 d-flex justify-content-end fs-6 align-items-center">
                    Cena od&nbsp;<strong>100 zł</strong>
                    <hr />
                    <a class="ms-2 btn fs-6 btn-dark">@lang('travels.check')</a>
                </div>
            </div>

        </div>
    </div></div>
</template>

<style scoped>

</style>
