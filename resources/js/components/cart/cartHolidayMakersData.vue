<script setup>
import { inject, ref } from "vue";
import CartContent from "@/components/cart/cartContent.vue";
import PeopleHolidaysFullName from "@/components/cart/peopleHolidaysFullName.vue";

const order = inject('order');
const lang = inject('lang');
const selectBook = ref(0);

function getCountBooking() {
    return order.value.books.length - 1;
}
function nextBook() {
    let countBooking = getCountBooking();
    selectBook.value++;
    if (selectBook.value > countBooking) {
        selectBook.value = 0;
    }
}

function previousBook() {
    let countBooking = getCountBooking();
    selectBook.value--;
    if (selectBook.value < 0) {
        selectBook.value = countBooking;
    }
}
</script>

<template>
    <cart-content>
        <span class="fs-2"><strong>{{ lang['holidaysMarketsData'] }}</strong></span>
        <div class="d-flex flex-column mt-3" v-if="order !== null">

            <template v-for="(booking, index) in order.books">
                <div :class="'shadow-sm d-flex justify-content-center align-items-center border-grayLight-1 p-2 overflow-hidden rounded-2 mb-2 flex-column ' + [index === selectBook ? '' : 'd-none']">

                    <div class="d-flex align-items-center">
                        <div class="btn-outline-dark fs-5 pointer" @click="previousBook"><strong>&lt;</strong></div>
                        <span class="fs-3 mx-3">{{ booking.trips.name }}</span>
                        <div class="btn-outline-dark fs-5 pointer" @click="nextBook"><strong>></strong></div>
                    </div>

                    <people-holidays-full-name v-for="adult in booking.count_adult" age="adult" :book_id="booking.id"/>
                    <people-holidays-full-name v-for="kid in booking.count_adult" age="kid" :book_id="booking.id"/>
                </div>
            </template>

        </div>
    </cart-content>
</template>

<style scoped>

</style>
