<template>
    <div class="container mx-auto px-4 py-6 max-w-5xl">
      <!-- Tiêu đề chính -->
      <h1 class="text-3xl font-bold text-gray-900 mb-1">Reviews</h1>
      <h2 class="text-xl text-gray-600 mb-6">Công Nghệ</h2>
      
      <!-- Lưới sản phẩm -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <ReviewCard 
          v-for="review in reviews"
          :key="review.id"
          :review="review"
          class="hover:-translate-y-1 transition-transform"
        />
      </div>
    </div>
  </template>
  
  <script setup lang="ts">
  import ReviewCard from '@/pages/Review/ReviewCard.vue'
  
  const reviews = [
    {   
      id: 1,
      title: 'MERCUSYS 4G LTE Mobile WiFi MT110',
      date: '1/3/25',
      views: '1.5M',
      comments: 3,
      rating: 2.5,
      excerpt: 'Bộ phát WiFi di động với tốc độ 4G LTE, giải pháp mạng linh hoạt cho mọi nhu cầu di chuyển...'
    },
    {
      id: 2,
      title: 'Corsair VOID Wireless V2',
      date: '21/4/25',
      views: '2.4K',
      comments: 0,
      rating: 4.5,
      excerpt: 'Tai nghe gaming không dây với âm thanh vòm 7.1, thiết kế êm ái cho trải nghiệm chơi game lâu dài...'
    },
    {
      id: 3,
      title: 'Xiaomi 15 Ultra',
      date: '15/5/25',
      views: '3.2M',
      comments: 42,
      rating: 4.8,
      excerpt: 'Flagship chụp ảnh mạnh nhất năm 2025 với hệ thống 4 camera Leica, hiệu năng vượt trội...'
    }
  ]
  </script>