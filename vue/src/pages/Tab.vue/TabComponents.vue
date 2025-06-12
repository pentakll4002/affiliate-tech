<template>
  <!-- Tabs -->
  <nav class="container mx-auto flex items-center space-x-4 px-4 sm:px-6 py-2 overflow-x-auto text-sm sm:text-base scrollbar-hide">
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
.scrollbar-hide::-webkit-scrollbar {
  display: none;
}
.scrollbar-hide {
  -ms-overflow-style: none;
  scrollbar-width: none;
}
</style>
