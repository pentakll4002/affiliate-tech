<template>
  <div class="min-h-screen flex flex-col bg-gray-50">
    <TheHeader />
    <main class="flex-grow">
      <router-view />
    </main>
    <TheFooter />
  </div>
</template>

<script setup>
import TheHeader from './pages/About/Header.vue'
import TheFooter from './pages/About/Footer.vue'
</script>