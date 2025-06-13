<template>
  <button
    @click="$emit('click')"
    aria-label="Open Chat Bot"
    class="fixed bottom-6 right-20 z-50 w-20 h-20 transition-transform transform hover:scale-105"
  >
    <!-- Chỉ hiển thị icon ChatBot -->
    <img src="@/assets/images/chatbot.png" alt="ChatBot" class="w-12 h-12" />
  </button>
</template>

<script setup lang="ts">
defineEmits<{
  click: []
}>()
</script>

<style scoped>
/* Nếu cần thêm kiểu tùy chỉnh, có thể thêm ở đây */
</style>