<script setup>

import CartContent from "@/components/cart/cartContent.vue";
</script>

<template>
    <cart-content>
            <span class="fs-2"><strong>Dostawa i wysyłka</strong></span>
        <div class="d-flex flex-column mt-3">
            <div class="border-grayLight-1 rounded-2 p-3 shadow-sm">
                <h3 class="fs-2">Dostawa</h3>
                <div class="  d-flex justify-content-between align-items-center p-3 mb-2 rounded-2 border-grayLight-1">
                    <div class="rounded-2 overflow-hidden">
                        <picture>
                            <img src="http://127.0.0.1/slide1.jpg" width="120" height="75" />
                        </picture>
                    </div>
                    <div class="d-flex justify-content-evenly w-100 px-3 align-items-center">
                        <div>
                            Kurier DPD
                        </div>
                        <div>
                            Koszt: <strong>120zł</strong>
                        </div>
                    </div>
                    <div class="btn btn-outline-dark">
                        Wybierz
                    </div>
                </div>
            </div>

            <div class="border-grayLight-1 mt-4 rounded-2 p-3 shadow-sm">
                <h3 class="fs-2">Płatnośc</h3>
                <div class="  d-flex justify-content-between align-items-center p-3 mb-2 rounded-2 border-grayLight-1">
                    <div class="rounded-2 overflow-hidden">
                        <picture>
                            <img src="http://127.0.0.1/slide1.jpg" width="120" height="75" />
                        </picture>
                    </div>
                    <div class="d-flex justify-content-evenly w-100 px-3 align-items-center">
                        <div>
                            Kurier DPD
                        </div>
                        <div>
                            Koszt: <strong>120zł</strong>
                        </div>
                    </div>
                    <div class="btn btn-outline-dark">
                        Wybierz
                    </div>
                </div>
            </div>
        </div>
    </cart-content>
</template>

<style scoped>

</style>
