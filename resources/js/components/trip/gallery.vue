<script setup>
import {onMounted, ref} from "vue";

defineProps([
    'gallery',
    'category',
])

const selectedMainImage = ref(1);

function changeImage(number) {
    const imagesTag = document.querySelectorAll('img[data-main-images]');
    const countImages = imagesTag.length;

    let numberNew = number - 1;

    if (numberNew < 0) {
        numberNew = countImages - 1
    } else if (numberNew >= countImages) {
        numberNew = 0;
    }


    try {
        imagesTag[selectedMainImage.value].classList.add('d-none');
    } catch (e) {}
    try {
        imagesTag[numberNew].classList.remove('d-none');
    } catch (e) {}


    selectedMainImage.value = numberNew;
}

onMounted(() => {
    changeImage(selectedMainImage.value);
})

</script>

<template>
    <div class=" w-50 px-5 pt-5 ">
        <div class="trip_gallery--main w-100 rounded-2 overflow-hidden position-relative">

            <template v-for="image in gallery">
                <picture v-if="image.pivot.default === 0">
                    <source :srcset="image.link_webp" type="image/webp">
                    <img :src="image.link_image" class="img-fluid d-none" data-main-images/>
                </picture>
            </template>

            <div class="position-absolute top-50 p-2 bg-dark rounded-2 ms-2 pointer" @click="changeImage(selectedMainImage)" >
                <picture>
                    <source srcset="/files/icons/arrow.webp" type="image/webp">
                    <img src="/files/icons/arrow.png" width="30" height="30" class="btn-prev"/>
                </picture>
            </div>

            <div class="position-absolute top-50 p-2 bg-dark rounded-2 end-0 me-2 pointer" @click="changeImage(selectedMainImage + 2)" >
                <picture>
                    <source srcset="/files/icons/arrow.webp" type="image/webp">
                    <img src="/files/icons/arrow.png" width="30" height="30" class="btn-next"/>
                </picture>
            </div>

        </div>

        <div class="my-2 d-flex overflow-hidden flex-wrap justify-content-evenly">
            <template v-for="(image, index) in gallery">
                <div class="overflow-hidden rounded-3 mx-1 mb-2 card-mini" v-if="image.pivot.default === 0" >
                    <picture>
                        <source :srcset="image.link_webp" type="image/webp">
                        <img :src="image.link_image" class="pointer border-grayLight-1" width="120" height="100" @click="changeImage(index)"/>
                    </picture>
                </div>
            </template>

        </div>
    </div>
</template>

<style scoped>
.trip_gallery--main {
    max-width: 690px;
    max-height: 576px;
}

.btn-prev {
    transform: rotate(90deg);
}

.btn-next {
    transform: rotate(-90deg);
}
</style>
