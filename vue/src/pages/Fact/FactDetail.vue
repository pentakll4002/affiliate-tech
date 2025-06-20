<template>
    <div class="fixed inset-0 bg-black bg-opacity-90 z-50 flex items-center justify-center p-4">
      <div v-if="fact" class="relative w-full h-full max-w-md max-h-[90vh] overflow-hidden rounded-lg shadow-xl">
        <!-- Close Button -->
        <button @click="closeFactDetail" class="absolute top-4 right-4 z-10 text-white bg-black bg-opacity-50 rounded-full p-2 hover:bg-opacity-75 transition-opacity duration-200">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
  
        <!-- Fact Content -->
        <div class="w-full h-full flex flex-col justify-between bg-white rounded-lg">
          <img :src="getFullImageUrl(fact.image)" alt="Fact Image" class="w-full h-full object-contain bg-black" />
          
          <div class="absolute top-0 left-0 right-0 p-4 flex items-center bg-gradient-to-b from-black/70 to-transparent">
            <img :src="getFullImageUrl(fact.avatar)" alt="Avatar" class="w-10 h-10 rounded-full object-cover border-2 border-white mr-3" />
            <div>
              <p class="text-white font-semibold">{{ fact.username }}</p>
              <p class="text-gray-300 text-sm">{{ timeAgo(fact.created_at) }}</p>
            </div>
          </div>
        </div>
      </div>
      <div v-else class="text-white text-lg">Đang tải Fact hoặc Fact không tìm thấy...</div>
    </div>
  </template>
  
  <script setup lang="ts">
  import { ref, onMounted } from 'vue';
  import { useRoute, useRouter } from 'vue-router';
  import axios from 'axios';
  
  interface Fact {
    id: number;
    user_id: number;
    username: string;
    image: string;
    avatar: string;
    created_at: string;
    updated_at: string;
  }
  
  const fact = ref<Fact | null>(null);
  const route = useRoute();
  const router = useRouter();
  
  const fetchFact = async () => {
    try {
      const factId = route.params.id;
      const response = await axios.get(`/api/facts/${factId}`);
      fact.value = response.data;
    } catch (error) {
      console.error('Lỗi khi tải Fact chi tiết:', error);
      fact.value = null;
    }
  };
  
  const closeFactDetail = () => {
    router.push('/');
  };
  
  const getFullImageUrl = (url: string | null) => {
    if (!url) return '';
    if (url.startsWith('http')) return url;
    return `http://127.0.0.1:8000${url}`;
  };
  
  const timeAgo = (dateString: string): string => {
    const date = new Date(dateString);
    const now = new Date();
    const seconds = Math.floor((now.getTime() - date.getTime()) / 1000);
  
    let interval = seconds / 31536000;
    if (interval > 1) return Math.floor(interval) + " năm trước";
    interval = seconds / 2592000;
    if (interval > 1) return Math.floor(interval) + " tháng trước";
    interval = seconds / 86400;
    if (interval > 1) return Math.floor(interval) + " ngày trước";
    interval = seconds / 3600;
    if (interval > 1) return Math.floor(interval) + " giờ trước";
    interval = seconds / 60;
    if (interval > 1) return Math.floor(interval) + " phút trước";
    return Math.floor(seconds) + " giây trước";
  };
  
  onMounted(() => {
    fetchFact();
  });
  </script>
  
  <style scoped>
  /* Tùy chỉnh thanh cuộn nếu cần */
  .overflow-y-auto::-webkit-scrollbar {
    width: 4px;
  }
  
  .overflow-y-auto::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.1);
  }
  
  .overflow-y-auto::-webkit-scrollbar-thumb {
    background: rgba(255, 255, 255, 0.3);
    border-radius: 2px;
  }
  
  .overflow-y-auto::-webkit-scrollbar-thumb:hover {
    background: rgba(255, 255, 255, 0.5);
  }
  </style> 