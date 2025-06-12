<template>
    <div 
      class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-[1.02]"
    >
      <div class="h-48 bg-gray-200 flex items-center justify-center">
        <img 
          v-if="product.image" 
          :src="product.image" 
          :alt="product.title" 
          class="object-cover h-full w-full"
        >
        <div v-else class="text-gray-500">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg>
        </div>
      </div>
      <div class="p-4">
        <span class="text-sm text-blue-600 font-medium">{{ product.category }}</span>
        <h3 class="mt-1 text-lg font-semibold text-gray-900 line-clamp-2">{{ product.title }}</h3>
        <p class="mt-2 text-gray-600 text-sm line-clamp-3">{{ product.description }}</p>
        <button class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors duration-300">
          Xem chi tiết
        </button>
      </div>
    </div>
  </template>
  
  <script setup lang="ts">
  defineProps<{
    product: {
      id: number
      title: string
      category: string
      image?: string
      description: string
    }
  }>()
  </script>