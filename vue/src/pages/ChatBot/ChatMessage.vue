<template>
    <div :class="[
      'flex transition-all duration-300',
      message.sender === 'user' ? 'justify-end' : 'justify-start'
    ]">
      <div :class="[
        'flex items-end space-x-2 max-w-xs',
        message.sender === 'user' ? 'flex-row-reverse space-x-reverse' : ''
      ]">
        <!-- Avatar -->
        <div :class="[
          'w-6 h-6 rounded-full flex items-center justify-center transition-all duration-200 hover:scale-110',
          message.sender === 'user' 
            ? 'bg-gradient-to-r from-blue-500 to-purple-500' 
            : 'bg-gradient-to-r from-gray-400 to-gray-500'
        ]">
          <svg v-if="message.sender === 'user'" class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
          </svg>
          <svg v-else class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
            <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"/>
          </svg>
        </div>
        
        <!-- Message Bubble -->
        <div :class="[
          'px-4 py-2 rounded-2xl transition-all duration-200 hover:scale-105',
          message.sender === 'user' 
            ? 'bg-gradient-to-r from-blue-500 to-purple-500 text-white' 
            : 'bg-gray-100 text-gray-800 hover:bg-gray-200'
        ]">
          <p class="text-sm leading-relaxed">{{ message.text }}</p>
          <p :class="[
            'text-xs mt-1',
            message.sender === 'user' ? 'text-blue-100' : 'text-gray-500'
          ]">
            {{ message.time }}
          </p>
        </div>
      </div>
    </div>
  </template>
  
  <script setup lang="ts">
  interface Message {
    id: number
    text: string
    sender: 'user' | 'bot'
    time: string
  }
  
  defineProps<{
    message: Message
  }>()
  </script>