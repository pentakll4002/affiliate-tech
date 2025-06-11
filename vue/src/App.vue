<template>
  <div class="min-h-screen flex flex-col bg-gray-50">
    <TheHeader />
    <main class="flex-grow">
      <router-view />
      <TheFact />
      <TheArticle />
    </main>
    <TheFooter />
  </div>
</template>

<script setup>
import TheHeader from './pages/About/Header.vue'
import TheFooter from './pages/About/Footer.vue'
import TheFact from './pages/About/Fact.vue'
import TheArticle from './pages/About/Article.vue'
</script>