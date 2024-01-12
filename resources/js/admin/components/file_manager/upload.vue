<script setup>
import {useFetchSendFiles} from "@/primary_function/useFetch.js";

function uploadFile(upload) {
    setTimeout(() => {
        const inputUpload = document.querySelector(`input.sendContent`);
        console.log(inputUpload);
        const formData = new FormData();
        formData.append('file', inputUpload.files[0]);
        useFetchSendFiles(formData);



    }, 100);

   // const formUpload = document.querySelector('form');
    //let formData = new FormData(formUpload);
//console.log(inputUpload.files);

/*
    formData.append('file', files[i].name);
    useFetchSendFiles(formData);*/
}
</script>

<template>
    

</template>

<style scoped>
.sendContent {
    max-width: 100%;
    z-index: 10;
}
</style>
