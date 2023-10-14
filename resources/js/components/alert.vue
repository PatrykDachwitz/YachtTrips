<script setup>
defineProps([
   'description',
   'codeError'
]);

import error from '@/components/error.vue';
import information from '@/components/information.vue';
import success from '@/components/success.vue';
import waring from '@/components/waring.vue';


</script>

<template>


    <div class="alert alert-primary d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
        <div>
            An example alert with an icon
        </div>
    </div>
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
            An example success alert with an icon
        </div>
    </div>
    <div class="alert alert-warning d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
            An example warning alert with an icon
        </div>
    </div>
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
            An example danger alert with an icon
        </div>
    </div>

</template>

<style scoped>

</style>
