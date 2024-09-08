<script setup>
import {ref} from "vue";

const test = ref([]);


function testDrop(e) {
    e.preventDefault();

    const filesInput = document.querySelector('[name="file"]');


    //filesInput.files = e.dataTransfer.files;

}
</script>

<template>
<input type="file" name="file">
    <div style="min-width: 100% !important;min-height: 100px !important;background-color: #5c6332 !important;" @dragover.prevent=""  @drop.prevent="testDrop">
        <span>testest tes tse tse ts</span>
    </div>
    <div>

    </div>
</template>

<style scoped>

</style>
