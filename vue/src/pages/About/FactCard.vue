<template>
    <div
      class="flex-shrink-0 w-[120px] h-[210px] rounded-2xl overflow-hidden shadow-xl bg-white 
             transform transition duration-300 hover:scale-105 hover:shadow-2xl cursor-pointer group relative"
    >
      <img :src="image" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
      <img :src="avatar" class="w-10 h-10 rounded-full border-[3px] border-white absolute top-3 left-3 shadow-md transition duration-300 group-hover:scale-105" />
      <div class="absolute bottom-0 w-full px-2 py-2 bg-gradient-to-t from-black/70 via-black/30 to-transparent">
        <p class="text-white text-sm font-semibold text-center drop-shadow-sm">{{ username }}</p>
      </div>
    </div>
  </template>
  
  <script setup>
  defineProps(['image', 'avatar', 'username'])
  </script>
  