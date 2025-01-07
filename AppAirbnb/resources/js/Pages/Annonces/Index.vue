<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Carousel from '@/Components/Carousel.vue';
defineProps({
  annonces: Array,
});
</script>

<template>
  <AppLayout title="Annonces">
    <div class="container mx-auto px-4">
      <h1 class="text-3xl font-bold mb-6">Annonces</h1>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div 
          v-for="annonce in annonces" 
          :key="annonce.id" 
          class="border rounded-lg shadow-md p-4"
        >
          <!-- Boucle sur toutes les images de l'annonce -->
          <div v-for="image in annonce.images" :key="image.id">
                <img :src="`/storage/AnnonceImage/${image.path}`" alt="Image de l'annonce" class="w-full h-48 object-cover rounded-t-lg"/>
            </div>
            
          <h2 class="text-xl font-semibold">{{ annonce.title }}</h2>
          <p class="text-gray-600 mb-2">{{ annonce.description }}</p>
          <div class="text-right text-lg font-bold text-blue-600">
            {{ annonce.price_per_night }}€
          </div>
        </div>

      </div>
    </div>
  </AppLayout>
</template>

<script>
export default {
  props: {
    annonces: Array, 
  },
};
</script>