<template>
  <div class="bg-white shadow-sm font-sans">
    <!-- Header -->
    <header class="flex flex-wrap items-center justify-between px-4 sm:px-6 py-2 gap-2">
      <!-- Logo -->
      <div class="flex items-center gap-3">
        <img src="./assets/images/techdeal.jpg" alt="Logo" class="h-10 w-10 object-cover rounded-md" />
        <div class="flex flex-col leading-tight">
          <span class="text-base sm:text-lg font-bold text-sky-600">Mottech.vn</span>
          <span class="text-[10px] text-gray-400 tracking-widest hidden sm:block">MẠNG XÃ HỘI</span>
        </div>
      </div>

      <!-- Search bar -->
      <div class="flex-1 p-4 hidden sm:block">
        <div class="relative w-full max-w-[600px]">
          <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
            <MagnifyingGlassIcon class="w-5 h-5 text-gray-400" />
          </div>
          <input
            type="text"
            placeholder="Tìm sản phẩm công nghệ, cộng đồng, bạn bè..."
            class="w-full pl-10 pr-4 py-2 rounded-full border border-gray-300 text-sm bg-white text-gray-700 placeholder-gray-400 
                   focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500 
                   transition-all duration-300 transform hover:scale-[1.01] hover:shadow-md"
          />
        </div>
      </div>

      <!-- Icons group -->
      <div class="flex items-center bg-gray-100 rounded-full px-3 py-1.5 space-x-2">
        <!-- Icon search mobile -->
        <button class="group sm:hidden text-gray-600 hover:text-sky-600 transition transform hover:scale-110">
          <MagnifyingGlassIcon class="w-8 h-8" />
          <span class="block max-w-0 group-hover:max-w-full transition-all duration-300 ease-in-out h-[2px] bg-sky-600 mt-1"></span>
        </button>

        <!-- User -->
        <button class="group text-gray-600 hover:text-sky-600 transition transform hover:scale-110">
          <UserCircleIcon class="w-8 h-8" />
          <span class="block max-w-0 group-hover:max-w-full transition-all duration-300 ease-in-out h-[2px] bg-sky-600 mt-1"></span>
        </button>

        <!-- Menu -->
        <button class="group text-gray-600 hover:text-sky-600 transition transform hover:scale-110">
          <Bars3Icon class="w-8 h-8" />
          <span class="block max-w-0 group-hover:max-w-full transition-all duration-300 ease-in-out h-[2px] bg-sky-600 mt-1"></span>
        </button>
      </div>
    </header>

    <!-- Tabs -->
    <nav class="flex items-center space-x-4 px-4 sm:px-6 py-2 overflow-x-auto text-sm sm:text-base scrollbar-hide">
      <!-- Tab Active -->
      <span class="text-sky-600 font-semibold border-b-2 border-sky-600 pb-1 whitespace-nowrap">
        Home
      </span>

      <!-- Other tabs -->
      <span
        v-for="(tab, index) in tabs"
        :key="index"
        class="relative text-gray-600 hover:text-sky-600 cursor-pointer whitespace-nowrap transition hover:scale-105 group"
      >
        {{ tab }}
        <span
          class="absolute left-0 -bottom-0.5 w-0 h-[2px] bg-sky-600 transition-all duration-300 ease-in-out group-hover:w-full"
        ></span>
      </span>
    </nav>
  </div>
</template>

<script setup>
import { Bars3Icon, UserCircleIcon, MagnifyingGlassIcon } from '@heroicons/vue/24/outline'

const tabs = [
  '#buffseo',
  '#ces25',
  '#ai',
  '#iphone 16',
  '#goclamviec',
  '#trên tay',
  '#tintuc',
  '#review',
]
</script>

<style scoped>
/* Ẩn scrollbar ngang của tab */
.scrollbar-hide::-webkit-scrollbar {
  display: none;
}
.scrollbar-hide {
  -ms-overflow-style: none;
  scrollbar-width: none;
}
</style>
