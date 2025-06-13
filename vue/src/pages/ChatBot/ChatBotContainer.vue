<template>
  <div class="fixed bottom-5 right-5 z-50">
    <ChatButton v-if="!isOpen" @click="toggleChat" />
    <ChatTab v-else @close="closeChat" />
  </div>
</template>

<script setup lang="ts">
import { ref } from 'vue'
import ChatButton from './ChatButton.vue'
import ChatTab from './ChatTab.vue'

const isOpen = ref(false)
const toggleChat = () => { isOpen.value = !isOpen.value }
const closeChat = () => { isOpen.value = false }
</script>