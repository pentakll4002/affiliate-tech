<template>
    <div class="fixed inset-0 bg-black bg-opacity-90 z-50 flex">
      <!-- Left Sidebar for Fact Previews -->
      <div class="w-1/4 bg-gray-900 bg-opacity-80 p-4 overflow-y-auto">
        <button @click="closeFactStory" class="text-white mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
        <h2 class="text-white text-lg font-semibold mb-4">Tất cả Fact</h2>
        <div v-if="facts.length" class="space-y-3">
          <div
            v-for="(factItem, index) in facts"
            :key="factItem.id"
            @click="goToFactByIndex(index)"
            :class="{ 'border-2 border-blue-500': index === currentFactIndex }"
            class="flex items-center p-2 rounded-lg cursor-pointer transition-colors duration-200"
          >
            <img :src="getFullImageUrl(factItem.avatar)" alt="Avatar" class="w-10 h-10 rounded-full object-cover mr-3" />
            <div>
              <p class="text-white font-semibold">{{ factItem.username }}</p>
              <p class="text-gray-400 text-sm">{{ timeAgo(factItem.created_at) }}</p>
            </div>
          </div>
        </div>
        <div v-else class="text-gray-400">Đang tải danh sách Fact...</div>
      </div>
  
      <!-- Main Fact Display Area -->
      <div class="flex-1 flex items-center justify-center p-4 relative">
        <div v-if="currentFact" class="relative w-full h-full max-w-md max-h-[90vh] overflow-hidden rounded-lg shadow-xl">
          <!-- Close Button - Optional, as we have one in sidebar -->
          <button @click="closeFactStory" class="absolute top-4 right-4 z-10 text-white bg-black bg-opacity-50 rounded-full p-2 hover:bg-opacity-75 transition-opacity duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
  
          <!-- Fact Content -->
          <div class="w-full h-full flex flex-col justify-between bg-white rounded-lg">
            <img :src="getFullImageUrl(currentFact.image)" alt="Fact Image" class="w-full h-full object-contain bg-black" />
            
            <div class="absolute top-0 left-0 right-0 p-4 flex items-center bg-gradient-to-b from-black/70 to-transparent">
              <img :src="getFullImageUrl(currentFact.avatar)" alt="Avatar" class="w-10 h-10 rounded-full object-cover border-2 border-white mr-3" />
              <div>
                <p class="text-white font-semibold">{{ currentFact.username }}</p>
                <p class="text-gray-300 text-sm">{{ timeAgo(currentFact.created_at) }}</p>
              </div>
            </div>
          </div>
  
          <!-- Navigation Buttons -->
          <button
            v-if="currentFactIndex > 0"
            @click="goToPrevFact"
            class="absolute left-4 top-1/2 -translate-y-1/2 text-white bg-black bg-opacity-50 rounded-full p-2 hover:bg-opacity-75 transition-opacity duration-200"
          >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
          </button>
          <button
            v-if="currentFactIndex < facts.length - 1"
            @click="goToNextFact"
            class="absolute right-4 top-1/2 -translate-y-1/2 text-white bg-black bg-opacity-50 rounded-full p-2 hover:bg-opacity-75 transition-opacity duration-200"
          >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </button>
        </div>
        <div v-else class="text-white text-lg">Đang tải Fact hoặc không tìm thấy Fact...</div>
      </div>
    </div>
  </template>
  
  <script setup lang="ts">
  import { ref, onMounted, watch } from 'vue';
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
  
  const facts = ref<Fact[]>([]);
  const currentFact = ref<Fact | null>(null);
  const currentFactIndex = ref<number>(-1);
  
  const route = useRoute();
  const router = useRouter();
  
  const fetchAllFacts = async () => {
    try {
      const response = await axios.get('/api/facts');
      facts.value = response.data;
      setInitialFact();
    } catch (error) {
      console.error('Lỗi khi tải Fact:', error);
      facts.value = [];
    }
  };
  
  const setInitialFact = () => {
    const factId = route.params.id;
    if (factId && facts.value.length > 0) {
      const index = facts.value.findIndex((f: Fact) => f.id === parseInt(factId as string));
      if (index !== -1) {
        currentFactIndex.value = index;
        currentFact.value = facts.value[index];
      } else {
        // If ID not found, default to first fact
        currentFactIndex.value = 0;
        currentFact.value = facts.value[0];
        router.replace({ params: { id: facts.value[0].id.toString() } });
      }
    } else if (facts.value.length > 0) {
      // If no ID in route, default to first fact
      currentFactIndex.value = 0;
      currentFact.value = facts.value[0];
      router.replace({ params: { id: facts.value[0].id.toString() } });
    }
  };
  
  const goToFactByIndex = (index: number) => {
    if (index >= 0 && index < facts.value.length) {
      currentFactIndex.value = index;
      currentFact.value = facts.value[index];
      router.push({ name: 'FactDetail', params: { id: facts.value[index].id.toString() } });
    }
  };
  
  const goToNextFact = () => {
    if (currentFactIndex.value < facts.value.length - 1) {
      goToFactByIndex(currentFactIndex.value + 1);
    }
  };
  
  const goToPrevFact = () => {
    if (currentFactIndex.value > 0) {
      goToFactByIndex(currentFactIndex.value - 1);
    }
  };
  
  const closeFactStory = () => {
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
    if (interval > 1) return Math.floor(interval) + ' năm trước';
    interval = seconds / 2592000;
    if (interval > 1) return Math.floor(interval) + ' tháng trước';
    interval = seconds / 86400;
    if (interval > 1) return Math.floor(interval) + ' ngày trước';
    interval = seconds / 3600;
    if (interval > 1) return Math.floor(interval) + ' giờ trước';
    interval = seconds / 60;
    if (interval > 1) return Math.floor(interval) + ' phút trước';
    return Math.floor(seconds) + ' giây trước';
  };
  
  onMounted(() => {
    fetchAllFacts();
  });
  
  watch(() => route.params.id, (newId: string | string[] | undefined) => {
    if (facts.value.length > 0 && newId) {
      const index = facts.value.findIndex((f: Fact) => f.id === parseInt(newId as string));
      if (index !== -1) {
        currentFactIndex.value = index;
        currentFact.value = facts.value[index];
      }
    }
  });
  </script>
  
  <style scoped>
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