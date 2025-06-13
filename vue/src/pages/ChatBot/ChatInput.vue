<template>
    <div class="p-4 border-t border-gray-100 bg-gray-50/50 rounded-b-xl">
      <div class="flex items-center space-x-2">
        <input
          v-model="inputText"
          @keyup.enter="handleSend"
          type="text"
          placeholder="Nhập tin nhắn của bạn..."
          class="flex-1 px-4 py-2 border border-gray-200 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm transition-all duration-200 hover:border-gray-300"
        />
        <button
          @click="handleSend"
          :disabled="!inputText.trim()"
          class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-500 hover:from-blue-600 hover:to-purple-600 disabled:from-gray-300 disabled:to-gray-400 text-white rounded-full flex items-center justify-center transition-all duration-200 hover:scale-110 disabled:hover:scale-100 disabled:cursor-not-allowed"
        >
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
          </svg>
        </button>
      </div>
    </div>
  </template>
  
  <script setup lang="ts">
  import { ref } from 'vue'
  
  const inputText = ref<string>('')
  
  const emit = defineEmits<{
    send: [message: string]
  }>()
  
  const handleSend = (): void => {
    if (!inputText.value.trim()) return
    
    emit('send', inputText.value)
    inputText.value = ''
  }
  </script>