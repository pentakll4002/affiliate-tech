<template>
  <div>
    <TheHeader v-if="!isAuthPage" />
    <router-view />
    <TheFooter v-if="!isAuthPage" />
  </div>
</template>

<script setup>
import { useRoute } from 'vue-router';
import TheHeader from './pages/About/Header.vue'
import TheFooter from './pages/About/Footer.vue'
import { computed } from 'vue';

const route = useRoute()
const isAuthPage = computed(() => 
  route.path === '/login' || route.path === '/register' || route.path === '/forgot'
) 

</script>