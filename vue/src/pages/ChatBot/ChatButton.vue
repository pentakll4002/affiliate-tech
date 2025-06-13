<template>
  <button
    @click="$emit('click')"
    aria-label="Open Chat Bot"
    class="
      fixed bottom-8 right-14
      w-16 h-16
      z-50
      bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500
      hover:from-blue-600 hover:via-purple-600 hover:to-pink-600
      rounded-2xl shadow-lg
      transition-all duration-300 ease-out
      transform hover:scale-110 active:scale-95
      focus:outline-none focus:ring-4 focus:ring-blue-300/50
      animate-pulse hover:animate-none
      group relative overflow-hidden
    "
  >
    <!-- Background Animation -->
    <div class="absolute inset-0 bg-gradient-to-r from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
    
    <!-- Icon -->
    <svg 
      class="w-6 h-6 text-white relative z-10 mx-auto" 
      fill="none" 
      stroke="currentColor" 
      viewBox="0 0 24 24"
    >
      <path 
        stroke-linecap="round" 
        stroke-linejoin="round" 
        stroke-width="2" 
        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"
      />
    </svg>

    <!-- Notification Badge -->
    <div class="absolute -top-2 -right-2 w-6 h-6 bg-gradient-to-r from-red-500 to-pink-500 rounded-full flex items-center justify-center animate-bounce">
      <span class="text-white text-xs font-bold">1</span>
    </div>
  </button>
</template>

<script setup lang="ts">
defineEmits<{
  click: []
}>()
</script>