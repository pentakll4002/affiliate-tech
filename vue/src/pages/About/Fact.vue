<template>
    <div class="bg-white shadow-lg rounded-xl px-4 py-4">
      <h2 class="text-xl font-semibold mb-3">Tinhte Fact</h2>
  
      <!-- Thanh cuộn ngang giống tab -->
      <div class="flex space-x-4 overflow-x-auto pb-2 scrollbar-hide">
        <!-- Tạo fact mới -->
        <div
          class="flex-shrink-0 w-[120px] h-[210px] rounded-2xl bg-gradient-to-br from-blue-400 to-green-400 
                 flex flex-col items-center justify-center text-white text-sm font-semibold cursor-pointer 
                 hover:scale-105 transition-transform duration-300 shadow-lg">
          <div class="w-10 h-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
          </div>
          Tạo fact mới
        </div>
  
        <!-- Các item fact -->
        <FactCard
          v-for="(fact, index) in facts"
          :key="index"
          :image="fact.image"
          :avatar="fact.avatar"
          :username="fact.username"
        />
      </div>
    </div>
  </template>
  
  <script setup>
    import FactCard from './FactCard.vue'  
  const facts = [
    {
      image: './assets/facts/thumb1.jpg',
      avatar: './assets/avatars/avatar1.jpg',
      username: 'khang2929',
    },
    {
      image: './assets/facts/thumb2.jpg',
      avatar: './assets/avatars/avatar2.jpg',
      username: 'thianfatech',
    },
    // Add more...
  ]
  </script>
  
  <style scoped>
  .scrollbar-hide::-webkit-scrollbar {
    display: none;
  }
  .scrollbar-hide {
    -ms-overflow-style: none;
    scrollbar-width: none;
  }
  </style>
