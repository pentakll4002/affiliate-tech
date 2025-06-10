<template>
    <header class="bg-white shadow sticky top-0 z-50">
      <div class="bg-gray-100 py-1 px-4 text-sm text-gray-600">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
          <span>MẠNG XÃ HỘI</span>
          <span>Tìm sản phẩm công nghệ, cộng đồng, bạn bè</span>
        </div>
      </div>
      <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">
        <router-link to="/" class="text-2xl font-bold text-orange-500">Tinhte.vn</router-link>
        <nav class="hidden md:flex space-x-6">
          <router-link to="/" class="font-medium hover:text-orange-500">Home</router-link>
          <a href="#" class="font-medium hover:text-orange-500">#buffseo</a>
          <a href="#" class="font-medium hover:text-orange-500">#ces25</a>
          <a href="#" class="font-medium hover:text-orange-500">#ai</a>
          <a href="#" class="font-medium hover:text-orange-500">#iphone16</a>
          <a href="#" class="font-medium hover:text-orange-500">#goclamviec</a>
          <a href="#" class="font-medium hover:text-orange-500">#trên_tay</a>
        </nav>
        <button class="md:hidden text-gray-500">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </header>
  </template>
  <script setup>
//
</script>
  <style scoped>
  .router-link-exact-active {
    @apply text-orange-500 font-bold;
  }
  </style>