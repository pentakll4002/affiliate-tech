<template>
  <div>
    <TheHeader v-if="!isAuthPage" />
      <router-view />
    <TheFooter v-if="!isAuthPage" />
    <TheChatBot v-if="!isAuthPage" />
  </div>
</template>

<script setup>
import { useRoute } from 'vue-router';
import TheHeader from './pages/About/Header.vue'
import TheFooter from './pages/About/Footer.vue'
import TheChatBot from './pages/ChatBot/ChatBotContainer.vue'
import { computed } from 'vue';

const route = useRoute()
const isAuthPage = computed(() =>
  route.path === '/login' || route.path === '/register' || route.path === '/forgot'
)
</script>

<style scoped>
.fade-enter-active, .fade-leave-active {
  transition: opacity 1.2s ease;
}
.fade-enter-from, .fade-leave-to {
  opacity: 0;
}
</style>
