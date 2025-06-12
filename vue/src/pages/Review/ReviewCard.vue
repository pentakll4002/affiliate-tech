<template>
    <div class="bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden hover:shadow-md transition-all duration-200">
      <!-- Header với tiêu đề và ngày -->
      <div class="p-4 border-b border-gray-100">
        <div class="flex justify-between items-start">
          <h3 class="text-lg font-bold text-gray-900 line-clamp-2">{{ review.title }}</h3>
          <span class="text-xs text-gray-500 whitespace-nowrap ml-2">{{ review.date }}</span>
        </div>
      </div>
  
      <!-- Thông tin lượt xem, bình luận -->
      <div class="px-4 py-2 bg-gray-50 flex items-center space-x-4 text-xs text-gray-500">
        <span class="flex items-center">
          <EyeIcon class="h-3 w-3 mr-1" />
          {{ review.views }}
        </span>
        <span class="flex items-center">
          <ChatBubbleLeftRightIcon class="h-3 w-3 mr-1" />
          {{ review.comments }}
        </span>
        <span class="flex items-center ml-auto">
          <StarIcon class="h-3 w-3 text-yellow-400 mr-1" />
          {{ review.rating }}
        </span>
      </div>
  
      <!-- Nội dung tóm tắt -->
      <div class="p-4">
        <p class="text-gray-600 text-sm line-clamp-3">{{ review.excerpt }}</p>
        <button class="mt-3 text-blue-600 text-sm font-medium hover:text-blue-800 transition-colors flex items-center">
          Đọc tiếp
          <ArrowRightIcon class="h-3 w-3 ml-1" />
        </button>
      </div>
    </div>
  </template>
  
  <script setup lang="ts">
  import { EyeIcon, ChatBubbleLeftRightIcon, StarIcon, ArrowRightIcon } from '@heroicons/vue/24/outline'
  
  defineProps<{
    review: {
      id: number
      title: string
      date: string
      views: string
      comments: number
      rating: number
      excerpt: string
    }
  }>()
  </script>