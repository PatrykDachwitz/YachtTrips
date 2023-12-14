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

function getFirstPosition(booking, countVacationer, age) {
    let countRegisterVacationer = 0;

    if (booking.vacationers !== []) {
        console.log(age)
        booking.vacationers.forEach(vacationer => {
            if (vacationer.age === age) countRegisterVacationer++;
        });

        let availableVacationer = countVacationer - countRegisterVacationer;

        if (availableVacationer > 0) {
            return availableVacationer
        } else {
            return 0;
        }
    } else {
        return countVacationer;
    }
}
</script>

<template>
    <cart-content>
        <span class="fs-2"><strong>{{ lang['holidaysMarketsData'] }}</strong></span>
        <form class="d-flex flex-column mt-3" v-if="order !== null" data-cart-vacationers-data-form>

            <template v-for="(booking, index) in order.books">
                <div :class="'shadow-sm d-flex justify-content-center align-items-center border-grayLight-1 p-2 overflow-hidden rounded-2 mb-2 flex-column ' + [index === selectBook ? '' : 'd-none']">

                    <div class="d-flex align-items-center">
                        <div class="btn-outline-dark fs-5 pointer" @click="previousBook"><strong>&lt;</strong></div>
                        <span class="fs-3 mx-3">{{ booking.trips.name }}</span>
                        <div class="btn-outline-dark fs-5 pointer" @click="nextBook"><strong>></strong></div>
                    </div>

                    <people-holidays-full-name v-for="vacationer in booking.vacationers" :vacationer="vacationer" :book_id="booking.id" />
                    <people-holidays-full-name v-for="vacationer in (getFirstPosition(booking, booking.count_adult, 'adult'))" :vacationer="{age: 'adult'}" :book_id="booking.id"/>
                    <people-holidays-full-name v-for="vacationer in (getFirstPosition(booking, booking.count_kids, 'kid'))" :vacationer="{age: 'kid'}" :book_id="booking.id"/>
                </div>
            </template>

        </form>
    </cart-content>
</template>

<style scoped>

</style>
