<template>
  <div class="min-h-screen flex items-center justify-center bg-white p-4">
    <div
      class="w-full max-w-md bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 transition-all duration-500 ease-out hover:shadow-2xl"
    >
      <div class="bg-white p-6 text-center border-b border-gray-200">
        <div
          class="mx-auto bg-teal-50 rounded-full p-3 w-16 h-16 flex items-center justify-center transition-transform duration-700 hover:rotate-[360deg]"
        >
          <LockClosedIcon
            class="h-8 w-8 text-teal-600 transition-transform duration-300 hover:scale-110"
          />
        </div>
        <h2
          class="mt-4 text-2xl font-bold text-gray-800 transition-colors duration-300 hover:text-teal-600"
        >
          Đăng nhập tài khoản
        </h2>
      </div>

      <div class="p-8">
        <form class="space-y-6" @submit.prevent="handleSubmit">
          <div class="space-y-4">
            <div>
              <label
                for="username"
                class="block text-sm font-medium text-gray-700 mb-1 transition-colors duration-300 hover:text-teal-600"
                >Tên tài khoản hoặc Email</label
              >
              <div
                class="relative mt-1 rounded-md shadow-sm transition-all duration-300 hover:shadow-md"
              >
                <div
                  class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"
                >
                  <UserIcon
                    class="h-5 w-5 text-teal-500 transition-transform duration-300 group-hover:scale-125"
                  />
                </div>
                <input
                  id="email"
                  v-model="formData.email"
                  type="text"
                  required
                  class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300 transform hover:scale-[1.01]"
                  placeholder="Nhập tài khoản hoặc email"
                />
              </div>
            </div>

            <div>
              <div class="flex items-center justify-between mb-1">
                <label
                  for="password"
                  class="block text-sm font-medium text-gray-700 transition-colors duration-300 hover:text-teal-600"
                  >Mật khẩu</label
                >
                <a
                  href="#"
                  class="text-sm font-medium text-teal-600 hover:text-teal-500 flex items-center transition-all duration-300 transform hover:translate-x-0.5"
                  @click.prevent="handleForgotPassword"
                >
                  <KeyIcon
                    class="h-4 w-4 mr-1 transition-transform duration-300 group-hover:rotate-[15deg]"
                  />
                  Quên mật khẩu?
                </a>
              </div>
              <div
                class="relative mt-1 rounded-md shadow-sm transition-all duration-300 hover:shadow-md"
              >
                <div
                  class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"
                >
                  <LockClosedIcon
                    class="h-5 w-5 text-teal-500 transition-transform duration-300 group-hover:scale-125"
                  />
                </div>
                <input
                  id="password"
                  v-model="formData.password"
                  type="password"
                  required
                  class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300 transform hover:scale-[1.01]"
                  placeholder="Nhập mật khẩu"
                />
              </div>
            </div>
          </div>

          <button
            type="submit"
            class="w-full flex justify-center items-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-base font-medium text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 transition-all duration-500 ease-[cubic-bezier(0.34,1.56,0.64,1)] transform hover:scale-[1.03] active:scale-[0.98]"
          >
            <ArrowRightOnRectangleIcon
              class="h-5 w-5 mr-2 transition-transform duration-300 group-hover:translate-x-1"
            />
            <span class="transition-transform duration-300 group-hover:translate-x-0.5"
              >Đăng nhập</span
            >
          </button>
        </form>

        <div class="relative my-6">
          <div class="absolute inset-0 flex items-center">
            <div class="w-full border-t border-gray-300"></div>
          </div>
          <div class="relative flex justify-center">
            <span
              class="px-3 bg-white text-sm text-gray-500 transition-all duration-500 hover:text-teal-500"
              >Hoặc đăng nhập bằng</span
            >
          </div>
        </div>

        <div class="grid grid-cols-3 gap-3">
          <button
            class="flex justify-center items-center py-2.5 px-4 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 bg-white transition-all duration-300 ease-out transform hover:scale-110 hover:shadow-lg"
          >
            <svg class="h-5 w-5 transition-transform duration-300 hover:scale-125" viewBox="0 0 24 24">
              <path
                fill="#4285F4"
                d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
              />
              <path
                fill="#34A853"
                d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
              />
              <path
                fill="#FBBC05"
                d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"
              />
              <path
                fill="#EA4335"
                d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"
              />
            </svg>
          </button>

          <button
            class="flex justify-center items-center py-2.5 px-4 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 bg-white transition-all duration-300 ease-out transform hover:scale-110 hover:shadow-lg"
          >
            <svg
              class="h-5 w-5 text-[#1877F2] transition-transform duration-300 hover:scale-125"
              viewBox="0 0 24 24"
              fill="currentColor"
            >
              <path
                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.06 24 12.073z"
              />
            </svg>
          </button>

          <button
            class="flex justify-center items-center py-2.5 px-4 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 bg-white transition-all duration-300 ease-out transform hover:scale-110 hover:shadow-lg"
          >
            <svg
              class="h-5 w-5 transition-transform duration-300 hover:scale-125"
              viewBox="0 0 24 24"
            >
              <path
                fill="#000"
                d="M20.283 6.709a8.119 8.119 0 0 1-2.356.646 4.123 4.123 0 0 0 1.81-2.278 8.193 8.193 0 0 1-2.605.996 4.105 4.105 0 0 0-6.993 3.742 11.65 11.65 0 0 1-8.457-4.287 4.105 4.105 0 0 0 1.27 5.477 4.092 4.092 0 0 1-1.86-.513v.052a4.105 4.105 0 0 0 3.292 4.022 4.111 4.111 0 0 1-1.853.07 4.106 4.106 0 0 0 3.833 2.85A8.233 8.233 0 0 1 2 18.407a11.62 11.62 0 0 0 6.29 1.844c7.547 0 11.675-6.255 11.675-11.674 0-.178-.004-.355-.012-.53a8.345 8.345 0 0 0 2.05-2.124z"
              />
            </svg>
          </button>
        </div>
      </div>

      <div
        class="p-6 border-t border-gray-200 text-center text-gray-500 text-sm transition-colors duration-300 hover:text-teal-600"
      >
        Bạn chưa có tài khoản?
        <a
          href="#"
          class="font-semibold text-teal-600 hover:text-teal-700"
          @click.prevent="handleRegister"
          >Đăng ký ngay</a
        >
      </div>
    </div>
  </div>
</template>

<script lang="ts" setup>
import {
  LockClosedIcon,
  UserIcon,
  KeyIcon,
  ArrowRightOnRectangleIcon,
} from '@heroicons/vue/24/solid';

import { ref } from 'vue';
import axios from 'axios';
import { useRouter } from 'vue-router';
import { useUserStore } from '@/stores/useUserStore.js';

const router = useRouter();
const userStore = useUserStore();

const formData = ref({
  email: '',
  password: '',
});

const handleSubmit = async () => {
  if (!formData.value.email || !formData.value.password) {
    alert('Vui lòng nhập đủ thông tin!');
    return;
  }

  try {
    const res = await axios.post('http://localhost:8000/api/login', formData.value);

    if (res.data.access_token) {
      localStorage.setItem('authToken', res.data.access_token);
      userStore.setToken(res.data.access_token);
      console.log('Auth token saved to localStorage:', res.data.access_token);
    }

    if (res.data.user) {
      userStore.setUser(res.data.user);
      console.log('User data saved to Pinia store:', res.data.user);
    }

    alert(res.data.message || 'Đăng nhập thành công');
    
    router.push('/');
  } catch (err: any) {
    alert(err?.response?.data?.message || 'Đăng nhập thất bại');
  }
};

function handleForgotPassword() {
  console.log("Vào trang ForgotPassword thành công")
  router.push('/forgot')
}

function handleRegister() {
  console.log("Vào trang Register thành công")
  router.push('/register')
}
</script>
