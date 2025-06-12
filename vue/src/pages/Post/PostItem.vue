<template>
    <div
      class="bg-white rounded-2xl shadow-sm px-6 py-4 flex justify-between items-start hover:shadow-md hover:ring-1 hover:ring-blue-200 transition-all duration-300"
    >
      <!-- Left content -->
      <div class="flex items-start gap-3 max-w-[70%]">
        <div v-if="post.isNew" class="relative pt-1">
          <div class="absolute w-2 h-2 bg-blue-400 rounded-full animate-ping"></div>
          <div class="w-2 h-2 bg-blue-600 rounded-full relative"></div>
        </div>
        <div class="space-y-1">
          <h2 class="text-base sm:text-lg font-semibold text-blue-700 hover:text-blue-900 hover:underline cursor-pointer transition">
            {{ post.title }}
          </h2>
          <div class="text-sm text-gray-500">
            <span class="font-medium text-gray-700">{{ post.category }}</span> • {{ post.author }} • {{ post.date }}
          </div>
        </div>
      </div>
  
      <!-- Right meta -->
      <div class="text-right text-sm text-gray-500 min-w-[100px] space-y-1">
        <div class="font-semibold text-gray-700">🗨️ {{ post.replies.toLocaleString() }}</div>
        <div>👁️ {{ post.views }}</div>
        <div class="text-xs text-gray-400 italic">🕒 {{ post.time }}</div>
      </div>
    </div>
  </template>
  
  <script setup lang="ts">
  interface Post {
    id: number
    title: string
    category: string
    author: string
    date: string
    replies: number
    views: string
    time: string
    isNew?: boolean
  }
  
  const props = defineProps<{
    post: Post
  }>()
  </script>
  