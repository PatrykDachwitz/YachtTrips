<script setup>
defineProps(['image'])

function deleteImage(id) {
    let containerImage = document.querySelector(`div[data-image-container="${id}"]`);
    containerImage.parentElement.removeChild(containerImage);
}
</script>

<template>
    <div class="graphic-container py-4" :data-image-container="image.id">
        <picture>
            <img :src="`${image.path}/${image.name}.${image.extension}`" width="200"/>
        </picture>

        <input type="hidden" name='images["id"][]' :value="image.id">

        <div class="col-md-6 me-5 w-25 ms-5">
            <label for="inputPassword4" class="form-label">Nazwa</label>
            <select class="form-select" name='images["devices"][]' aria-label="Default select example">
                <option value="pc">Pc</option>
                <option value="mobile" >Mobile</option>
                <option value="tablet" >Tablet</option>
            </select>
        </div>
        <fieldset class="d-flex w-50" disabled>
            <div class="col-md-6 me-5 w-25">
                <label for="inputPassword4" class="form-label">Nazwa</label>
                <input type="text" name="url" class="form-control" id="inputPassword4" :value="image.name">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Url</label>
                <input type="text" name="url" class="form-control" id="inputPassword4" :value="`${image.path}/${image.name}.${image.extension}`">
            </div>
        </fieldset>

        <button class="btn btn-danger" @click="deleteImage(image.id)">Usuń</button>
    </div>
</template>

<style scoped>

</style>
