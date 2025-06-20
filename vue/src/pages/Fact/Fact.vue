<template>
  <div class="max-w-7xl mx-auto p-4 bg-gray-50">
    <h2 class="text-xl font-semibold mb-4">Mọt Tech Fact</h2>

    <div class="relative">
      <!-- Scrollable container -->
      <div
        class="flex space-x-4 overflow-x-auto no-scrollbar pb-2 min-w-full"
        ref="scrollContainer"
      >
        <!-- Tạo Fact mới -->
        <div
          class="min-w-[140px] max-w-[140px] flex-shrink-0 flex flex-col items-center justify-center rounded-xl bg-gradient-to-tr from-teal-400 to-blue-500 text-white text-center p-4 cursor-pointer"
          @click="showCreateFactModal = true"
        >
          <div class="w-10 h-10 rounded-full bg-white bg-opacity-20 flex items-center justify-center mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
          </div>
          <span class="text-sm font-medium">Tạo fact mới</span>
        </div>

        <!-- Các Fact -->
        <router-link
          v-for="(fact, index) in facts"
          :key="fact.id || index"
          :to="{ name: 'FactDetail', params: { id: fact.id } }"
          class="min-w-[140px] max-w-[140px] flex-shrink-0"
        >
          <FactCard
            :image="fact.image"
            :avatar="fact.avatar"
            :username="fact.username"
          />
        </router-link>
      </div>

      <!-- Nút cuộn trái (chỉ hiển thị khi cần) -->
      <button
        v-if="showScrollButtons"
        class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white shadow-md rounded-full p-2 z-10 hidden md:block"
        @click="scrollLeft"
      >
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
      </button>

      <!-- Nút cuộn phải (chỉ hiển thị khi cần) -->
      <button
        v-if="showScrollButtons"
        class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white shadow-md rounded-full p-2 z-10 hidden md:block"
        @click="scrollRight"
      >
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </button>
    </div>

    <!-- Fact Create Modal -->
    <div v-if="showCreateFactModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4">
      <FactCreate @close="showCreateFactModal = false" @fact-created="addFact" />
    </div>
  </div>
</template>

<script setup lang="ts">
import { ref, onMounted, onUnmounted } from 'vue'
import axios from 'axios';
import FactCard from './FactCard.vue'
import FactCreate from './FactCreate.vue'
import { useUserStore } from '@/stores/useUserStore';

axios.defaults.baseURL = 'http://127.0.0.1:8000';

const userStore = useUserStore();

const scrollContainer = ref(null)
const showScrollButtons = ref(false)
const showCreateFactModal = ref(false)
const facts = ref([]); // Use ref for facts data

// Function to fetch facts from backend
async function fetchFacts() {
  try {
    const response = await axios.get('/api/facts');
    facts.value = response.data; // Assuming response.data is an array of facts
  } catch (error) {
    console.error('Error fetching facts:', error);
  }
}

function addFact(newFact) {
  facts.value.unshift(newFact);
  showCreateFactModal.value = false;
}

function checkScrollNeeded() {
  if (scrollContainer.value) {
    showScrollButtons.value =
      scrollContainer.value.scrollWidth > scrollContainer.value.clientWidth
  }
}

function scrollLeft() {
  if (scrollContainer.value) {
    scrollContainer.value.scrollBy({ left: -200, behavior: 'smooth' })
  }
}

function scrollRight() {
  if (scrollContainer.value) {
    scrollContainer.value.scrollBy({ left: 200, behavior: 'smooth' })
  }
}

// Xử lý responsive
onMounted(() => {
  fetchFacts(); // Fetch facts on component mount
  checkScrollNeeded()
  window.addEventListener('resize', checkScrollNeeded)
})

onUnmounted(() => {
  window.removeEventListener('resize', checkScrollNeeded)
})
</script>

<style scoped>
.no-scrollbar::-webkit-scrollbar {
  display: none;
}
.no-scrollbar {
  -ms-overflow-style: none;
  scrollbar-width: none;
}

@media (max-width: 768px) {
  .min-w-\[140px\] {
    min-width: 120px;
  }
  .max-w-\[140px\] {
    max-width: 120px;
  }
}

/* Thêm style đồng bộ với Article.vue */
.max-w-7xl {
  max-width: 80rem;
}
.bg-gray-50 {
  background-color: #f9fafb;
}
.mx-auto {
  margin-left: auto;
  margin-right: auto;
}
</style>