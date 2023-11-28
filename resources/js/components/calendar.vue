<script setup>
import {inject, onMounted, ref, watch, watchEffect} from "vue";
import {Calendar} from "@/primary_function/calendar.js";

defineProps([
    'locationByDataSet'
]);

const activeCalendar = inject('activeCalendar');
const locationDataSet = inject('locationDataSet');
const lang = inject('lang');
const date = new Date();
const calendarDate = ref({
    nextYear: null,
    currentYear: date.getFullYear(),
    previousYear: null,
    nextMonth: null,
    currentMonth: date.getMonth(),
    previousMonth: null,
    days: []
})

const calendarTest = new Calendar();
function changeCalendar(month, year) {
    calendarDate.value = calendarTest.getCalendar(month, year);
}

changeCalendar(calendarDate.value.currentMonth, calendarDate.value.currentYear)

function getFullNumberDate(number) {
    if (10 > number) {
        return `0${number}`;
    } else {
        return number;
    }
}

function constructCorrectDate(day, month, fullYear) {
    return `${getFullNumberDate(day)}-${getFullNumberDate(month)}-${fullYear}`
}
function setDate(day, month, fullYear, location) {
    const inputDate = document.querySelector(`input[name="${location}"]`);
    activeCalendar.value = "emptySupport";
    inputDate.value = constructCorrectDate(day, month, fullYear);
}

onMounted(() => {
    const calendar = document.querySelector('.calendars-vue');
    const calendarInput = document.querySelector(`img[data-calendar-input="${locationDataSet.value}"]`);
    calendarInput.parentElement.appendChild(calendar);
});

</script>

<template>
<div class="position-absolute end-0 top-0 border-grayLight-1 calendars calendars-vue overflow-hidden rounded-2 shadow-sm d-flex flex-column" :data-locationDataSet="locationByDataSet">
    <div class="d-flex justify-content-between align-items-center p-2 fs-5">

        <div class="pointer" v-if="calendarDate.previousMonth !== null & calendarDate.previousYear !== null" @click="changeCalendar(calendarDate.previousMonth, calendarDate.previousYear)"><b>&lt;</b></div>
        <div class="mx-2 pointer">
            <div class="fs-6 text-center">{{ calendarDate.currentYear }}</div>
            <div>{{ lang['monthName'][calendarDate.currentMonth] }}</div>
        </div>
        <div class="pointer" v-if="calendarDate.nextMonth !== null & calendarDate.nextYear !== null" @click="changeCalendar(calendarDate.nextMonth, calendarDate.nextYear)"><b>></b></div>
    </div>
    <div v-if="calendarDate.days !== null" class="d-flex flex-row flex-wrap justify-content-center align-items-center">
        <div v-for="dayName in lang['shortNameDay']" class="day">
    {{ dayName }}
    </div>
        <template v-for="(day, index) in calendarDate.days" :key="index">
            <br v-if="index%7 === 0 & index !== 0"/>
            <div class="day border-grayLight-1" :data-month-number="day.month" :data-month-day="day.day" @click="setDate(day.day, day.month, calendarDate.currentYear, locationByDataSet)">{{ day.day }}</div>
        </template>
    </div>
</div>
</template>
<style scoped>
 .calendars {
     background-color: rgb(242, 242, 242);
     z-index: 99999999999999999999999999;
     min-width: 184px;
     max-width: 184px;
 }

 .day {
     display: flex;
     justify-content: center;
     align-items: center;
     min-width: 26px;
     max-width: 26px;
     min-height: 26px;
     max-height: 26px;
 }

</style>
