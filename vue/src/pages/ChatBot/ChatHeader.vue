<template>
  <header class="w-full px-4 py-3 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 rounded-t-xl flex items-center justify-between">
    <div class="flex items-center">
      <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center mr-3 backdrop-blur-sm">
        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
          <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"/>
          <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"/>
        </svg>
      </div>
      <div>
        <h1 class="text-white text-lg font-semibold tracking-wide font-sans">TECHBOT TƯ VẤN</h1>
        <div class="flex items-center space-x-1">
          <div class="w-2 h-2 bg-green-300 rounded-full animate-pulse"></div>
          <p class="text-white/90 text-xs">Hỗ trợ tư vấn sản phẩm công nghệ 24/7</p>
        </div>
      </div>
    </div>
    
    <!-- Close Button -->
    <button
      @click="$emit('close')"
      class="hover:bg-white/20 p-2 rounded-full transition-all duration-200 hover:scale-110"
    >
      <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
      </svg>
    </button>
  </header>
</template>

<script setup lang="ts">
defineEmits<{
  close: []
}>()
</script>