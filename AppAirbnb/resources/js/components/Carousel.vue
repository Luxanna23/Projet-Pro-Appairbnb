<script setup>
import VueSlickCarousel from 'vue-slick-carousel';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';

defineProps({
  images: {
    type: Array,
    required: true,
  },
});
</script>

<template>
  <VueSlickCarousel 
  :dots="true" 
  :arrows="true" 
  :autoplay="true" 
  :infinite="true" 
  :speed="500" 
  :prevArrow="null" 
  :nextArrow="null"
>
  <div v-for="(image, index) in images" :key="index">
    <img :src="`/storage/AnnonceImage/${image.path}`" alt="Image" class="w-full h-48 object-cover rounded-lg" />
  </div>
</VueSlickCarousel>
</template>