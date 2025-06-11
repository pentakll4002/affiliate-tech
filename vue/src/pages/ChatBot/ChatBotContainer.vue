<template>
    <div class="hidden lg:block">
      <ChatButton v-if="!isOpen" @click="toggleChat" />
      <div v-else class="fixed bottom-[80px] right-4 lg:right-10 z-50">
        <ChatTab @close="closeChat" />
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  import ChatButton from './ChatButton.vue';
  import ChatTab from './ChatTab.vue';
  
  const isOpen = ref(false);
  const toggleChat = () => (isOpen.value = !isOpen.value);
  const closeChat = () => (isOpen.value = false);
  </script>
  