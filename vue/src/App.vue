<template>
  <div>
    <TheHeader />
    <router-view />
    <TheFooter />
  </div>
</template>

<script setup>
import TheHeader from './pages/About/Header.vue'
import TheFooter from './pages/About/Footer.vue'
</script>