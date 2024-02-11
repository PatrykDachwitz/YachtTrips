<script setup>
import {inject} from "vue";

defineProps([
    'trip'
])

const lang = inject('lang');
</script>

<template>
    <div class="w-100 max-lg-75 text-start">
        <h2 class="fs-1 mb-3">{{ trip.name }}</h2>
    </div>
    <div class="row w-100 max-lg-75 bg-gray p-3 shadow-sm overflow-hidden rounded-2 g-2">

        <div class="col-md-6">
            <label for="oceans" class="form-label">{{ lang.ocean }}</label>
            <input class="form-control" type="text" id="oceans" :value="trip.oceans.name" readonly/>
        </div>
        <div class="col-md-6">
            <label for="yachts" class="form-label">{{ lang.yacht }}</label>
            <input class="form-control" type="text" id="yachts" :value="trip.yachts.name" readonly/>
        </div>
        <div class="col-md-6">
            <label for="start_day" class="form-label">{{ lang.startDayTravel }}</label>
            <input class="form-control" type="text" id="start_day" :value="trip.start_travel" readonly />
        </div>
        <div class="col-md-6">
            <label for="end_day" class="form-label">{{ lang.endDayTravel }}</label>
            <input class="form-control" type="text" id="end_day" :value="trip.end_travel" readonly/>
        </div>

    </div>

    <div class="row w-100 max-lg-75 bg-gray p-3 shadow-sm overflow-hidden rounded-2 g-2 my-3">
        <div class="col-md-6">
            <label for="rooms_active_max_adults" class="form-label">{{ lang.countAdult }}</label>
            <select class="form-select" name="rooms_active_max_adults" id="rooms_active_max_adults" data-form-main>
                <option v-for="number in trip.rooms_active_max_adults" :value="number" @click="$emit('updatePrice', {value: number, name: 'countAdult'})" :selected="number===1">{{ number}}</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="rooms_active_max_kids" class="form-label">{{ lang.countChild }}</label>
            <select class="form-select" name="rooms_active_max_kids" id="rooms_active_max_kids" data-form-main>
                <option value="0" @click="$emit('updatePrice', {value: 0, name: 'countKids'})" selected>0</option>
                <option v-for="number in trip.rooms_active_max_kids" :value="number" @click="$emit('updatePrice', {value: number, name: 'countKids'})">{{ number}}</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="rooms_active_max_double_beds" class="form-label">{{ lang.countDoubleBeds }}</label>
            <select class="form-select" name="rooms_active_max_double_beds" id="rooms_active_max_double_beds" data-form-main>
                <option value="0" @click="$emit('updatePrice', {value: 0, name: 'doubleBeds'})" selected>0</option>
                <option v-for="number in trip.rooms_active_max_double_beds" :value="number" @click="$emit('updatePrice', {value: number, name: 'doubleBeds'})">{{ number}}</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="rooms_active_max_single_beds" class="form-label">{{ lang.countSingleBeds }}</label>
            <select class="form-select" name="rooms_active_max_single_beds" id="rooms_active_max_single_beds" data-form-main>
                <option value="0" @click="$emit('updatePrice', {value: 0, name: 'singleBeds'})">0</option>
                <option v-for="number in trip.rooms_active_max_single_beds" @click="$emit('updatePrice', {value: number, name: 'singleBeds'})" :value="number" :selected="number === 1">{{ number}}</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="rooms_active_max_kids_beds" class="form-label">{{ lang.countKidsBeds }}</label>
            <select class="form-select" name="rooms_active_max_kids_beds" id="rooms_active_max_kids_beds" data-form-main>
                <option value="0" @click="$emit('updatePrice', {value: 0, name: 'kidsBeds'})" selected>0</option>
                <option v-for="number in trip.rooms_active_max_kids_beds" @click="$emit('updatePrice', {value: number, name: 'kidsBeds'})" :value="number">{{ number}}</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="rooms_active_max_premium" class="form-label">{{ lang.premiumRoom }}</label>
            <select class="form-select" name="rooms_active_max_premium" id="rooms_active_max_premium" data-form-main>
                <option value="0" @click="$emit('updatePrice', {value: 0, name: 'premiumRoom'})" selected>{{ lang.no }}</option>
                <option value="1" @click="$emit('updatePrice', {value: 1, name: 'premiumRoom'})" v-if="trip.rooms_active_max_premium >= 1">{{ lang.yes }}</option>
            </select>
        </div>
    </div>
</template>

<style scoped>

</style>
