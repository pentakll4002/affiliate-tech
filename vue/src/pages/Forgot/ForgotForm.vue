<template>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-teal-50 p-4">
      <div class="w-full max-w-md bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 transition-all duration-300 hover:shadow-2xl">
        <div class="bg-gradient-to-r from-blue-500 to-teal-600 p-6 text-center">
          <div class="mx-auto bg-white rounded-full p-3 w-16 h-16 flex items-center justify-center transition-transform duration-700 hover:rotate-[360deg] shadow-lg">
            <KeyIcon class="h-8 w-8 text-blue-600" />
          </div>
          <h1 class="mt-4 text-2xl font-bold text-white">Đặt lại mật khẩu</h1>
          <p class="mt-2 text-blue-100">Nhập email để nhận liên kết đặt lại mật khẩu</p>
        </div>
        
        <div class="p-8">
          <form class="space-y-6" @submit.prevent="handleSubmit">
            <div>
              <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email <span class="text-red-500">*</span></label>
              <div class="relative mt-1 rounded-md shadow-sm">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                  <EnvelopeIcon class="h-5 w-5 text-blue-500" />
                </div>
                <input
                  id="email"
                  v-model="formData.email"
                  type="email"
                  required
                  class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                  :class="errors.email ? 'border-red-500 focus:ring-red-300' : ''"
                  placeholder="Nhập email của bạn"
                  @input="clearError('email')"
                />
              </div>
              <p v-if="errors.email" class="mt-1 text-sm text-red-600">{{ errors.email }}</p>
            </div>
            
            <!-- CAPTCHA Section -->
            <div class="pt-2">
              <div class="flex items-start p-4 bg-gray-50 rounded-lg border border-gray-200">
                <div class="flex items-center h-5">
                  <input 
                    id="captcha" 
                    v-model="formData.captcha"
                    type="checkbox" 
                    required
                    class="focus:ring-blue-500 h-5 w-5 text-blue-600 border-gray-300 rounded transition-all duration-300"
                  />
                </div>
                <div class="ml-3 text-sm">
                  <label for="captcha" class="font-medium text-gray-700">
                    Tôi không phải là người máy
                    <span class="text-red-500">*</span>
                  </label>
                  <div class="flex items-center mt-2">
                    <div class="bg-gray-200 border-2 border-dashed border-gray-400 rounded-xl w-16 h-8 flex items-center justify-center text-xs text-gray-500">
                      reCAPTCHA
                    </div>
                    <p class="ml-2 text-xs text-gray-500">Bảo mật - Điều khoản</p>
                  </div>
                </div>
              </div>
              <p v-if="errors.captcha" class="mt-1 text-sm text-red-600">{{ errors.captcha }}</p>
            </div>
            
            <button
              type="submit"
              class="w-full flex justify-center items-center py-3 px-6 border border-transparent rounded-xl shadow-lg text-base font-bold text-white bg-gradient-to-r from-blue-600 to-teal-600 hover:from-blue-700 hover:to-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-300 transform hover:scale-[1.02] active:scale-[0.98]"
            >
              <PaperAirplaneIcon class="h-5 w-5 mr-2 transform rotate-45" />
              <span>Gửi liên kết đặt lại</span>
            </button>
          </form>
          
          <div class="mt-6 text-center">
            <p class="text-sm text-gray-600">
              Nhớ mật khẩu?
              <router-link to="/login" class="font-medium text-blue-600 hover:text-blue-500">
                <span>Đăng nhập ngay</span>
                <ArrowRightIcon class="h-4 w-4 ml-1 inline-block" />
              </router-link>
            </p>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script setup lang="ts">

  import axios from 'axios'

  import { ref } from 'vue'
  import { 
    KeyIcon,
    EnvelopeIcon,
    PaperAirplaneIcon,
    ArrowRightIcon
  } from '@heroicons/vue/24/outline'
  
  interface ForgotPasswordForm {
    email: string
    captcha: boolean
  }
  
  interface FormErrors {
    email?: string
    captcha?: string
  }
  
  const formData = ref<ForgotPasswordForm>({
    email: '',
    captcha: false
  })
  
  const errors = ref<FormErrors>({})
  
  const clearError = (field: keyof FormErrors) => {
    if (errors.value[field]) {
      delete errors.value[field]
    }
  }
  
  const validateForm = (): boolean => {
    let isValid = true
    errors.value = {}
  
    // Validate email
    if (!formData.value.email.trim()) {
      errors.value.email = 'Vui lòng nhập email'
      isValid = false
    } else if (!/^\S+@\S+\.\S+$/.test(formData.value.email)) {
      errors.value.email = 'Email không hợp lệ'
      isValid = false
    }
  
    // Validate captcha
    if (!formData.value.captcha) {
      errors.value.captcha = 'Vui lòng xác nhận bạn không phải người máy'
      isValid = false
    }
  
    return isValid
  }
  
  const handleSubmit = async () => {
  if (!validateForm()) return

  try {
    const response = await axios.post('http://localhost:8000/api/forgot', {
      email: formData.value.email
    })

    if (response.data.status) {
      alert(response.data.message) // hoặc hiển thị toast
    } else {
      alert('Không thể gửi liên kết, vui lòng thử lại.')
    }
  } catch (error: any) {
    if (error.response?.status === 422) {
      const serverErrors = error.response.data.errors
      for (const key in serverErrors) {
        errors.value[key as keyof FormErrors] = serverErrors[key][0]
      }
    } else {
      alert('Đã xảy ra lỗi, vui lòng thử lại sau.')
    }
  }
}
  </script>
  
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
  
  body {
    font-family: 'Inter', sans-serif;
  }
  
  /* Animation cho icon gửi */
  @keyframes sendAnimation {
    0% { transform: translateX(0) rotate(45deg); }
    50% { transform: translateX(4px) rotate(45deg); }
    100% { transform: translateX(0) rotate(45deg); }
  }
  
  button:hover .rotate-45 {
    animation: sendAnimation 0.6s ease-in-out infinite;
  }
  </style>