<template>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-teal-50 to-blue-50 p-4">
      <div class="w-full max-w-4xl bg-white rounded-2xl shadow-2xl overflow-hidden border border-gray-100 transition-all duration-700 ease-[cubic-bezier(0.34,1.56,0.64,1)] hover:shadow-3xl">
        <div class="grid grid-cols-1 md:grid-cols-2">
          <!-- Phần form đăng ký (bên trái) -->
          <div class="p-8 order-2 md:order-1">
            <div class="text-center mb-8">
              <div class="mx-auto bg-gradient-to-r from-teal-500 to-blue-500 rounded-full p-3 w-16 h-16 flex items-center justify-center transition-transform duration-1000 hover:rotate-[360deg] shadow-lg">
                <UserPlusIcon class="h-8 w-8 text-white" />
              </div>
              <h1 class="mt-4 text-3xl font-bold text-gray-800 tracking-tight">Đăng ký tài khoản</h1>
              <p class="mt-2 text-gray-600">Tạo tài khoản để bắt đầu trải nghiệm</p>
            </div>
            
            <form class="space-y-5" @submit.prevent="handleSubmit">
              <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1 transition-colors duration-300 hover:text-teal-600">Tên</label>
                <div class="relative mt-1 rounded-md shadow-sm transition-all duration-300 hover:shadow-md">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <UserCircleIcon class="h-5 w-5 text-teal-500" />
                  </div>
                  <input
                    id="name"
                    v-model="formData.name"
                    type="text"
                    required
                    class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300"
                    placeholder="Nhập tên của bạn"
                  />
                </div>
              </div>
              
              <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1 transition-colors duration-300 hover:text-teal-600">Email</label>
                <div class="relative mt-1 rounded-md shadow-sm transition-all duration-300 hover:shadow-md">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <EnvelopeIcon class="h-5 w-5 text-teal-500" />
                  </div>
                  <input
                    id="email"
                    v-model="formData.email"
                    type="email"
                    required
                    class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300"
                    placeholder="Nhập email của bạn"
                  />
                </div>
              </div>
              
              <div class="grid grid-cols-1 gap-4">
                <div>
                  <label for="password" class="block text-sm font-medium text-gray-700 mb-1 transition-colors duration-300 hover:text-teal-600">Mật khẩu</label>
                  <div class="relative mt-1 rounded-md shadow-sm transition-all duration-300 hover:shadow-md">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                      <LockClosedIcon class="h-5 w-5 text-teal-500" />
                    </div>
                    <input
                      id="password"
                      v-model="formData.password"
                      type="password"
                      required
                      class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300"
                      placeholder="Nhập mật khẩu"
                    />
                  </div>
                </div>
                
                <div>
                  <label for="confirmPassword" class="block text-sm font-medium text-gray-700 mb-1 transition-colors duration-300 hover:text-teal-600">Xác nhận mật khẩu</label>
                  <div class="relative mt-1 rounded-md shadow-sm transition-all duration-300 hover:shadow-md">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                      <LockClosedIcon class="h-5 w-5 text-teal-500" />
                    </div>
                    <input
                      id="confirmPassword"
                      v-model="formData.confirmPassword"
                      type="password"
                      required
                      class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300"
                      placeholder="Xác nhận mật khẩu"
                    />
                  </div>
                </div>
              </div>
              
              <div class="pt-2">
                <div class="flex items-start">
                  <div class="flex items-center h-5">
                    <input 
                      id="terms" 
                      type="checkbox" 
                      class="focus:ring-teal-500 h-4 w-4 text-teal-600 border-gray-300 rounded transition-all duration-300 hover:scale-110"
                    />
                  </div>
                  <div class="ml-3 text-sm">
                    <label for="terms" class="font-medium text-gray-700">
                      Tôi đồng ý với <a href="#" class="text-teal-600 hover:text-teal-500 transition-colors duration-300">điều khoản dịch vụ</a> 
                      và <a href="#" class="text-teal-600 hover:text-teal-500 transition-colors duration-300">chính sách quyền riêng tư</a>
                    </label>
                  </div>
                </div>
              </div>
              
              <button
                type="submit"
                class="w-full flex justify-center items-center py-3 px-6 border border-transparent rounded-xl shadow-lg text-base font-bold text-white bg-gradient-to-r from-teal-600 to-blue-600 hover:from-teal-700 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 transition-all duration-300 transform hover:scale-[1.02] active:scale-[0.98] mt-4"
              >
                <ArrowRightIcon class="h-5 w-5 mr-2 transition-transform duration-300 group-hover:translate-x-1" />
                <span>Đăng ký tài khoản</span>
              </button>
            </form>
            
            <div class="mt-6 text-center">
              <p class="text-sm text-gray-600">
                Đã có tài khoản?
                <a href="#" class="font-medium text-teal-600 hover:text-teal-500 transition-all duration-300">
                  <span>Đăng nhập ngay</span>
                  <ArrowRightIcon class="h-4 w-4 ml-1 inline-block transition-transform duration-300 group-hover:translate-x-1" />
                </a>
              </p>
            </div>
          </div>
          
          <!-- Phần đăng nhập bằng mạng xã hội (bên phải) -->
          <div class="bg-gradient-to-br from-teal-500 to-blue-600 p-8 flex flex-col justify-center order-1 md:order-2">
            <div class="text-center mb-8">
              <h2 class="text-2xl font-bold text-white">Chào mừng bạn!</h2>
              <p class="mt-2 text-teal-100">Đăng nhập nhanh bằng tài khoản mạng xã hội</p>
            </div>
            
            <div class="space-y-4">
              <button 
                class="w-full flex items-center justify-center py-3 px-4 border border-transparent rounded-xl shadow-sm text-sm font-medium text-gray-700 bg-white transition-all duration-300 hover:bg-gray-50 hover:shadow-md"
              >
                <svg class="h-5 w-5 mr-2" viewBox="0 0 24 24">
                  <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                  <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                  <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                  <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                </svg>
                Đăng nhập bằng Google
              </button>
              
              <button 
                class="w-full flex items-center justify-center py-3 px-4 border border-transparent rounded-xl shadow-sm text-sm font-medium text-white bg-[#1877F2] transition-all duration-300 hover:bg-[#166FE5] hover:shadow-md"
              >
                <svg class="h-5 w-5 mr-2 text-white" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
                Đăng nhập bằng Facebook
              </button>
              
              <button 
                class="w-full flex items-center justify-center py-3 px-4 border border-gray-300 rounded-xl shadow-sm text-sm font-medium text-gray-700 bg-white transition-all duration-300 hover:bg-gray-50 hover:shadow-md"
              >
                <svg class="h-5 w-5 mr-2" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M12.152 6.896c-.948 0-2.415-1.078-3.96-1.04-2.04.027-3.91 1.183-4.961 3.014-2.117 3.675-.546 9.103 1.519 12.09 1.013 1.454 2.208 3.09 3.792 3.039 1.52-.065 2.09-.987 3.935-.987 1.831 0 2.35.987 3.96.948 1.637-.026 2.676-1.48 3.676-2.948 1.156-1.688 1.636-3.325 1.662-3.415-.039-.013-3.182-1.221-3.22-4.857-.026-3.04 2.48-4.494 2.597-4.559-1.429-2.09-3.623-2.324-4.39-2.376-2-.156-3.675 1.09-4.61 1.09zM15.53 3.83c.843-1.012 1.4-2.427 1.245-3.83-1.207.052-2.662.805-3.532 1.818-.78.896-1.454 2.338-1.273 3.714 1.338.104 2.715-.688 3.559-1.701z"/>
                </svg>
                Đăng nhập bằng Apple
              </button>
            </div>
            
            <div class="mt-8 text-center">
              <div class="relative my-6">
                <div class="absolute inset-0 flex items-center">
                  <div class="w-full border-t border-teal-300 opacity-50"></div>
                </div>
                <div class="relative flex justify-center">
                  <span class="px-3 bg-transparent text-sm text-teal-100">Hoặc đăng ký với email</span>
                </div>
              </div>
              
              <p class="text-sm text-teal-100 mt-6">
                Bằng việc đăng nhập, bạn đồng ý với <br>
                <a href="#" class="font-medium text-white hover:underline">Điều khoản dịch vụ</a> và 
                <a href="#" class="font-medium text-white hover:underline">Chính sách bảo mật</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script setup lang="ts">
  import { ref } from 'vue'
  import { 
    UserPlusIcon,
    UserCircleIcon,
    EnvelopeIcon,
    LockClosedIcon,
    ArrowRightIcon
  } from '@heroicons/vue/24/outline'
  
  interface RegisterForm {
    name: string
    email: string
    password: string
    confirmPassword: string
  }
  
  const formData = ref<RegisterForm>({
    name: '',
    email: '',
    password: '',
    confirmPassword: ''
  })
  
  const handleSubmit = () => {
    console.log('Registration submitted:', formData.value)
    // Xử lý logic đăng ký ở đây
  }
  </script>
  
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
  
  body {
    font-family: 'Inter', sans-serif;
    background: linear-gradient(135deg, #f0fdfa 0%, #e0f2fe 100%);
  }
  
  input:focus {
    box-shadow: 0 0 0 3px rgba(13, 148, 136, 0.2);
    transition: box-shadow 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
  }
  
  /* Animation cho nút đăng ký */
  @keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.02); }
    100% { transform: scale(1); }
  }
  
  .btn-pulse:hover {
    animation: pulse 1.5s infinite;
  }
  </style>