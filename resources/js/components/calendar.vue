<script setup>
const date = new Date();
const actualMonth = date.getMonth();
date.setDate(`01-${actualMonth}-2023`);


console.info(date)
</script>

<template>
<div>

</div>
</template>

<style scoped>

</style>
