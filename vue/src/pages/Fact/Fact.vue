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
        >
          <div class="w-10 h-10 rounded-full bg-white bg-opacity-20 flex items-center justify-center mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
          </div>
          <span class="text-sm font-medium">Tạo fact mới</span>
        </div>

        <!-- Các Fact - Hiển thị 8 cái ban đầu -->
        <FactCard
          v-for="(fact, index) in visibleFacts"
          :key="index"
          :image="fact.image"
          :avatar="fact.avatar"
          :username="fact.username"
          class="min-w-[140px] max-w-[140px] flex-shrink-0"
        />
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
  </div>
</template>

<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue'
import FactCard from './FactCard.vue'

const scrollContainer = ref(null)
const showScrollButtons = ref(false)

// Chỉ hiển thị 8 FactCard ban đầu
const visibleFacts = computed(() => facts.slice(0, 8))

// Kiểm tra xem có cần hiển thị nút cuộn không
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
  checkScrollNeeded()
  window.addEventListener('resize', checkScrollNeeded)
})

onUnmounted(() => {
  window.removeEventListener('resize', checkScrollNeeded)
})

const facts = [
  {
    username: 'Cáo - Foxtek',
    image: 'https://via.placeholder.com/140x200?text=Foxtek',
    avatar: 'https://via.placeholder.com/32?text=C',
  },
  {
    username: 'Donald Trump',
    image: 'https://via.placeholder.com/140x200?text=Trump',
    avatar: 'https://via.placeholder.com/32?text=D',
  },
  {
    username: 'crazysexycool',
    image: 'https://via.placeholder.com/140x200?text=CSC',
    avatar: 'https://via.placeholder.com/32?text=K',
  },
  {
    username: 'hehehe29',
    image: 'https://via.placeholder.com/140x200?text=Hehe',
    avatar: 'https://via.placeholder.com/32?text=H',
  },
  {
    username: 'Cho thuê laptop',
    image: 'https://via.placeholder.com/140x200?text=Thuê',
    avatar: 'https://via.placeholder.com/32?text=L',
  },
  {
    username: 'nkinhluan',
    image: 'https://via.placeholder.com/140x200?text=NKL',
    avatar: 'https://via.placeholder.com/32?text=N',
  },
  {
    username: 'cuhiep',
    image: 'https://via.placeholder.com/140x200?text=Cuhiep',
    avatar: 'https://via.placeholder.com/32?text=C',
  },
  {
    username: 'zyzy1908',
    image: 'https://via.placeholder.com/140x200?text=Zyzy',
    avatar: 'https://via.placeholder.com/32?text=Z',
  },
  {
    username: 'Yuri Yamamoto',
    image: 'https://via.placeholder.com/140x200?text=Yuri',
    avatar: 'https://via.placeholder.com/32?text=Y',
  },
]
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