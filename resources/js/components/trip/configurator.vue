<script setup>
import {inject, onMounted, ref} from "vue";

const trip = inject('trip');
const lang = inject('lang');
const availableOptions = ref([])
function setAccessibleRooms(accessible, newDetails) {
    if (accessible['double_beds'] === undefined) {
        accessible['double_beds'] = [newDetails.double_beds]
    } else {
        if (!accessible['double_beds'].includes(newDetails.double_beds)) {
            accessible['double_beds'].push(newDetails.double_beds)
        }
    }
    if (accessible['kids'] === undefined) {
        accessible['kids'] = [newDetails.kids]
    } else {
        if (!accessible['kids'].includes(newDetails.kids)) {
            accessible['kids'].push(newDetails.kids)
        }
    }
    if (accessible['kids_beds'] === undefined) {
        accessible['kids_beds'] = [newDetails.kids_beds]
    } else {
        if (!accessible['kids_beds'].includes(newDetails.kids_beds)) {
            accessible['kids_beds'].push(newDetails.kids_beds)
        }
    }
    if (accessible['single_beds'] === undefined) {
        accessible['single_beds'] = [newDetails.single_beds]
    } else {
        if (!accessible['single_beds'].includes(newDetails.single_beds)) {
            accessible['single_beds'].push(newDetails.single_beds)
        }
    }
    if (accessible['premium'] === undefined) {
        accessible['premium'] = [newDetails.premium]
    } else {
        if (!accessible['premium'].includes(newDetails.premium)) {
            accessible['premium'].push(newDetails.premium)
        }
    }

    return accessible;
}
function sortValue(accessibleRooms) {
    let sortAccessibleRooms = [];
    sortAccessibleRooms['double_beds'] = accessibleRooms['double_beds'].sort();
    sortAccessibleRooms['kids'] = accessibleRooms['kids'].sort();
    sortAccessibleRooms['kids_beds'] = accessibleRooms['kids_beds'].sort();
    sortAccessibleRooms['single_beds'] = accessibleRooms['single_beds'].sort();
    sortAccessibleRooms['premium'] = accessibleRooms['premium'].sort();

    return sortAccessibleRooms;
}

function updateCombinationsPerAdult() {
    let rooms = trip.value.rooms;
    let currentCountAdult = parseInt(document.querySelector(`[name="rooms_active_max_adults"]`).value);
    let accessibleRooms = [];

    rooms.forEach(room => {
        if (currentCountAdult <= room.adults) {
            accessibleRooms = setAccessibleRooms(accessibleRooms, room)
        }
    });
    availableOptions.value = sortValue(accessibleRooms);
}
function getCustomParam() {
    let customValueInputs = [];
    customValueInputs['double_beds'] = parseInt(document.querySelector(`[name="rooms_active_max_double_beds"]`).value)
    customValueInputs['kids'] = parseInt(document.querySelector(`[name="rooms_active_max_kids"]`).value)
    customValueInputs['kids_beds'] = parseInt(document.querySelector(`[name="rooms_active_max_kids_beds"]`).value)
    customValueInputs['single_beds'] = parseInt(document.querySelector(`[name="rooms_active_max_single_beds"]`).value)
    customValueInputs['premium'] = parseInt(document.querySelector(`[name="rooms_active_max_premium"]`).value)

    return customValueInputs;
}
function checkAvailableRoom(room, params) {
    return params['double_beds'] <= room.double_beds && params['kids'] <= room.kids && params['kids_beds'] <= room.kids_beds && params['single_beds'] <= room.single_beds && params['premium'] <= room.premium;
}
function updateCombinationsCustom() {
    let rooms = trip.value.rooms;
    let currentCountAdult = parseInt(document.querySelector(`[name="rooms_active_max_adults"]`).value);
    let customParam = getCustomParam();
    let accessibleRooms = [];

    rooms.forEach(room => {
        if (currentCountAdult <= room.adults && checkAvailableRoom(room, customParam)) {
            accessibleRooms = setAccessibleRooms(accessibleRooms, room)
        }
    });
    availableOptions.value = sortValue(accessibleRooms);
}


onMounted(() => {
    updateCombinationsPerAdult();
})
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
            <select class="form-select" @change="() => {
                updateCombinationsPerAdult();
                $emit('updatePrice', 'rooms_active_max_adults', 'countAdult');
            }" name="rooms_active_max_adults" id="rooms_active_max_adults" data-form-main>
                <option v-for="number in trip.rooms_active_max_adults" :value="number" :selected="number===1">{{ number}}</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="rooms_active_max_kids" class="form-label">{{ lang.countChild }}</label>
            <select class="form-select" name="rooms_active_max_kids" id="rooms_active_max_kids" @change="() => {updateCombinationsCustom();$emit('updatePrice', 'rooms_active_max_kids', 'countKids')}" data-form-main>
                <option value="0" selected>0</option>
                <template v-if="availableOptions['kids'] !== undefined">
                    <option v-for="number in availableOptions['kids']" :value="number">{{ number}}</option>
                </template>
            </select>
        </div>
        <div class="col-md-6">
            <label for="rooms_active_max_double_beds" class="form-label">{{ lang.countDoubleBeds }}</label>
            <select class="form-select" name="rooms_active_max_double_beds" id="rooms_active_max_double_beds" @change="() => {updateCombinationsCustom();$emit('updatePrice', 'rooms_active_max_double_beds', 'doubleBeds')}" data-form-main>
                <option value="0" selected>0</option>
                <template v-if="availableOptions['double_beds'] !== undefined">
                    <option v-for="number in availableOptions['double_beds']" :value="number">{{ number}}</option>
                </template>
            </select>
        </div>
        <div class="col-md-6">
            <label for="rooms_active_max_single_beds" class="form-label">{{ lang.countSingleBeds }}</label>
            <select class="form-select" name="rooms_active_max_single_beds" id="rooms_active_max_single_beds" @change="() => {updateCombinationsCustom();$emit('updatePrice', 'rooms_active_max_single_beds', 'singleBeds')}" data-form-main>
                <option value="0">0</option>
                <template v-if="availableOptions['single_beds'] !== undefined">
                    <option v-for="number in availableOptions['single_beds']" :value="number" :selected="number === 1">{{ number}}</option>
                </template>
            </select>
        </div>
        <div class="col-md-6">
            <label for="rooms_active_max_kids_beds" class="form-label">{{ lang.countKidsBeds }}</label>
            <select class="form-select" name="rooms_active_max_kids_beds" id="rooms_active_max_kids_beds" @change="() => {updateCombinationsCustom();$emit('updatePrice', 'rooms_active_max_kids_beds', 'kidsBeds')}" data-form-main>
                <option value="0" selected>0</option>
                <template v-if="availableOptions['kids_beds'] !== undefined">
                    <option v-for="number in availableOptions['kids_beds']" :value="number">{{ number}}</option>
                </template>
            </select>
        </div>
        <div class="col-md-6">
            <label for="rooms_active_max_premium" class="form-label">{{ lang.premiumRoom }}</label>
            <select class="form-select" name="rooms_active_max_premium" id="rooms_active_max_premium" @change="() => {updateCombinationsCustom();$emit('updatePrice', 'rooms_active_max_premium', 'premiumRoom')}" data-form-main>
                <option value="0" selected>{{ lang.no }}</option>
                <template v-if="availableOptions['premium'] !== undefined">
                    <option value="1" v-if="availableOptions['premium'].includes(1)">{{ lang.yes }}</option>
                </template>
            </select>
        </div>
    </div>
</template>

<style scoped>

</style>
