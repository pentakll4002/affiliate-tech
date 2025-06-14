<template>
  <div class="bg-white shadow-lg font-sans">
    <!-- Header -->
    <header class="flex flex-wrap items-center justify-between px-4 sm:px-6 py-4 gap-4">
      <!-- Logo -->
      <a
        href="#"
        class="group flex items-center gap-3 p-2 rounded-lg bg-transparent transition-all duration-500 ease-in-out hover:scale-105"
      >
        <img
          src="./assets/images/techdeal.jpg"
          alt="Logo"
          class="h-10 w-10 object-cover rounded-lg transition duration-500 ease-in-out group-hover:scale-110"
        />
        <div class="flex flex-col leading-tight">
          <span class="text-base sm:text-lg font-semibold text-sky-600 group-hover:text-sky-700 transition-all duration-300">
            Mottech.vn
          </span>
          <span
            class="text-[10px] text-gray-400 tracking-widest hidden sm:block group-hover:text-gray-500 transition-all duration-300"
          >
            MẠNG XÃ HỘI
          </span>
        </div>
      </a>
      
      <!-- Search bar -->
      <div class="flex-1 p-4 hidden sm:block">
        <div class="relative w-full max-w-[600px]">
          <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
            <MagnifyingGlassIcon class="w-5 h-5 text-gray-400" />
          </div>
          <input
            type="text"
            placeholder="Tìm sản phẩm công nghệ, cộng đồng, bạn bè..."
            class="w-full pl-10 pr-4 py-2 rounded-full border border-gray-300 text-sm bg-white text-gray-700 placeholder-gray-400 
                   focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500 
                   transition-all duration-300 transform hover:scale-[1.01] hover:shadow-md"
          />
        </div>
      </div>

      <!-- Icons group -->
      <div class="flex items-center bg-gray-100 rounded-full px-3 py-1.5 space-x-2 relative">
        <!-- "Xin chào username" next to user icon -->
        <div v-if="userStore.isLoggedIn" class="text-sky-600 font-semibold text-base pr-2">
            Xin chào {{ userStore.username }}!
        </div>
        <!-- Icon search mobile -->
        <button class="group sm:hidden text-gray-600 hover:text-sky-600 transition transform hover:scale-110">
          <MagnifyingGlassIcon class="w-8 h-8" />
          <span class="block max-w-0 group-hover:max-w-full transition-all duration-300 ease-in-out h-[2px] bg-sky-600 mt-1"></span>
        </button>

        <!-- User -->
        <div class="relative">
          <button 
            class="group text-gray-600 hover:text-sky-600 transition transform hover:scale-110"
            @click="toggleLoginMenu"
          >
            <UserCircleIcon class="w-8 h-8" />
            <span class="block max-w-0 group-hover:max-w-full transition-all duration-300 ease-in-out h-[2px] bg-sky-600 mt-1"></span>
          </button>
          
          <!-- Menu thả xuống -->
          <div 
            v-if="showLoginMenu && !userStore.isLoggedIn" 
            class="absolute right-0 top-full mt-2 w-52 bg-white border border-gray-300 rounded-xl shadow-xl z-10 overflow-hidden transition-all duration-200 ease-in-out"
          >
            <button 
                class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-sky-600 hover:underline hover:decoration-sky-500 hover:underline-offset-4 transition-all duration-200"
                @click="handleLoginClick"
              >
                Đăng nhập tài khoản
              </button>
              <button 
                class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-sky-600 hover:underline hover:decoration-sky-500 hover:underline-offset-4 transition-all duration-200"
                @click="handleRegisterClick"
              >
                Đăng ký tài khoản mới
              </button>
          </div>
        </div>

        <!-- Menu -->
        <div class="relative">
          <button 
            class="group text-gray-600 hover:text-sky-600 transition transform hover:scale-110"
            @click="toggleBarsMenu"
          >
            <Bars3Icon class="w-8 h-8" />
            <span class="block max-w-0 group-hover:max-w-full transition-all duration-300 ease-in-out h-[2px] bg-sky-600 mt-1"></span>
          </button>
          <!-- Bars Menu Dropdown -->
          <div
            v-if="showBarsMenu && userStore.isLoggedIn"
            class="absolute right-0 top-full mt-2 w-52 bg-white border border-gray-300 rounded-xl shadow-xl z-10 overflow-hidden transition-all duration-200 ease-in-out"
          >
            <button 
              class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-sky-600 hover:underline hover:decoration-sky-500 hover:underline-offset-4 transition-all duration-200"
              @click="handleCreateArticleClick"
            >
              Tạo Bài Viết
            </button>
            <button 
              class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-sky-600 hover:underline hover:decoration-sky-500 hover:underline-offset-4 transition-all duration-200"
              @click="handleCreatePostClick"
            >
              Tạo Post
            </button>
            <button 
              class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-sky-600 hover:underline hover:decoration-sky-500 hover:underline-offset-4 transition-all duration-200"
              @click="handleLogoutClick"
            >
              Đăng xuất
            </button>
          </div>
        </div>
      </div>
    </header>
  </div>
</template>

<script setup>
import { Bars3Icon, UserCircleIcon, MagnifyingGlassIcon } from '@heroicons/vue/24/outline'
import { ref } from 'vue';
import { useRouter } from 'vue-router'
import { useUserStore } from '@/stores/useUserStore.js';

const router = useRouter()
const userStore = useUserStore();

const showLoginMenu = ref(false)
const showBarsMenu = ref(false)

const toggleLoginMenu = () => {
  showLoginMenu.value = !showLoginMenu.value
  if (showBarsMenu.value) showBarsMenu.value = false;
}

const toggleBarsMenu = () => {
  showBarsMenu.value = !showBarsMenu.value
  // Close other menu if open
  if (showLoginMenu.value) showLoginMenu.value = false;
}

const handleLoginClick = () => {
  console.log("Đăng nhập tài khoản được nhấn")
  showLoginMenu.value = false
  router.push('/login')
}

const handleRegisterClick = () => {
  console.log("Đăng ký tài khoản mới được nhấn")
  showLoginMenu.value = false
  router.push('/register')
}

const handleCreateArticleClick = () => {
  console.log("Tạo Bài Viết được nhấn")
  showBarsMenu.value = false;
  router.push('/create-article');
};

const handleCreatePostClick = () => {
  console.log("Tạo Post được nhấn")
  showBarsMenu.value = false;
  router.push('/create-post');
};

const handleLogoutClick = () => {
  userStore.clearUser();
  showLoginMenu.value = false;
  showBarsMenu.value = false;
  router.push('/login');
}
</script>

<style scoped>
.scrollbar-hide::-webkit-scrollbar {
  display: none;
}
.scrollbar-hide {
  -ms-overflow-style: none;
  scrollbar-width: none;
}
</style>
