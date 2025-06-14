<template>
  <div
    class="min-h-screen flex items-center justify-center bg-gradient-to-br from-teal-50 to-blue-50 p-4"
  >
    <div
      class="w-full max-w-4xl bg-white rounded-2xl shadow-2xl overflow-hidden border border-gray-100 transition-all duration-700 ease-[cubic-bezier(0.34,1.56,0.64,1)] hover:shadow-3xl"
    >
      <div class="grid grid-cols-1 md:grid-cols-2">
        <!-- Form đăng ký (bên trái) -->
        <div class="p-8 order-2 md:order-1">
          <div class="text-center mb-8">
            <div
              class="mx-auto bg-gradient-to-r from-teal-500 to-blue-500 rounded-full p-3 w-16 h-16 flex items-center justify-center transition-transform duration-1000 hover:rotate-[360deg] shadow-lg"
            >
              <UserPlusIcon class="h-8 w-8 text-white" />
            </div>
            <h1
              class="mt-4 text-3xl font-bold text-gray-800 tracking-tight"
            >
              Đăng ký tài khoản
            </h1>
            <p class="mt-2 text-gray-600">
              Tạo tài khoản để bắt đầu trải nghiệm
            </p>
          </div>

          <form class="space-y-5" @submit.prevent="handleSubmit">
            <div>
              <label
                for="name"
                class="block text-sm font-medium text-gray-700 mb-1 transition-colors duration-300 hover:text-teal-600"
                >Tên</label
              >
              <div
                class="relative mt-1 rounded-md shadow-sm transition-all duration-300 hover:shadow-md"
              >
                <div
                  class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"
                >
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
              <label
                for="email"
                class="block text-sm font-medium text-gray-700 mb-1 transition-colors duration-300 hover:text-teal-600"
                >Email</label
              >
              <div
                class="relative mt-1 rounded-md shadow-sm transition-all duration-300 hover:shadow-md"
              >
                <div
                  class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"
                >
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
                <label
                  for="password"
                  class="block text-sm font-medium text-gray-700 mb-1 transition-colors duration-300 hover:text-teal-600"
                  >Mật khẩu</label
                >
                <div
                  class="relative mt-1 rounded-md shadow-sm transition-all duration-300 hover:shadow-md"
                >
                  <div
                    class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"
                  >
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
                <label
                  for="confirmPassword"
                  class="block text-sm font-medium text-gray-700 mb-1 transition-colors duration-300 hover:text-teal-600"
                  >Xác nhận mật khẩu</label
                >
                <div
                  class="relative mt-1 rounded-md shadow-sm transition-all duration-300 hover:shadow-md"
                >
                  <div
                    class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"
                  >
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
                    v-model="formData.terms"
                    required
                    class="focus:ring-teal-500 h-4 w-4 text-teal-600 border-gray-300 rounded transition-all duration-300 hover:scale-110"
                  />
                </div>
                <div class="ml-3 text-sm">
                  <label for="terms" class="font-medium text-gray-700">
                    Tôi đồng ý với
                    <a
                      href="#"
                      class="text-teal-600 hover:text-teal-500 transition-colors duration-300"
                      >điều khoản dịch vụ</a
                    >
                    và
                    <a
                      href="#"
                      class="text-teal-600 hover:text-teal-500 transition-colors duration-300"
                      >chính sách quyền riêng tư</a
                    >
                  </label>
                </div>
              </div>
            </div>

            <div v-if="errorMessage" class="text-red-500 text-sm font-medium">
              {{ errorMessage }}
            </div>

            <button
              type="submit"
              class="w-full flex justify-center items-center py-3 px-6 border border-transparent rounded-xl shadow-lg text-base font-bold text-white bg-gradient-to-r from-teal-600 to-blue-600 hover:from-teal-700 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 transition-all duration-300 transform hover:scale-[1.02] active:scale-[0.98] mt-4"
            >
              <ArrowRightIcon
                class="h-5 w-5 mr-2 transition-transform duration-300 group-hover:translate-x-1"
              />
              <span>Đăng ký tài khoản</span>
            </button>
          </form>

          <div class="mt-6 text-center">
            <p class="text-sm text-gray-600">
              Đã có tài khoản?
              <a
                href="#"
                class="font-medium text-teal-600 hover:text-teal-500 transition-all duration-300"
                @click=handleLogin
              >
                <span class="handleLogin">Đăng nhập ngay</span>
                <ArrowRightIcon
                  class="h-4 w-4 ml-1 inline-block transition-transform duration-300 group-hover:translate-x-1"
                />
              </a>
            </p>
          </div>
        </div>

        <!-- Đăng nhập mạng xã hội (bên phải) -->
        <div
          class="bg-gradient-to-br from-teal-500 to-blue-600 p-8 flex flex-col justify-center order-1 md:order-2"
        >
          <div class="text-center mb-8">
            <h2 class="text-2xl font-bold text-white">Chào mừng bạn!</h2>
            <p class="mt-2 text-teal-100">
              Đăng nhập nhanh bằng tài khoản mạng xã hội
            </p>
          </div>

          <div class="space-y-4">
            <button
              class="w-full flex items-center justify-center py-3 px-4 border border-transparent rounded-xl shadow-sm text-sm font-medium text-gray-700 bg-white transition-all duration-300 hover:bg-gray-50 hover:shadow-md"
            >
              <svg class="h-5 w-5 mr-2" viewBox="0 0 24 24">
                <path
                  fill="#4285F4"
                  d="M22.56 12.25c0-.82-.07-1.62-.2-2.38H12v4.5h6.13a5.24 5.24 0 01-2.27 3.44v2.87h3.66c2.15-1.98 3.39-4.89 3.39-8.43z"
                />
                <path
                  fill="#34A853"
                  d="M12 22c2.7 0 4.97-.9 6.63-2.43l-3.66-2.87c-1.01.68-2.3 1.09-3.96 1.09-3.04 0-5.62-2.05-6.55-4.8H2.58v3.02A10 10 0 0012 22z"
                />
                <path
                  fill="#FBBC05"
                  d="M5.45 13.99a6.04 6.04 0 010-3.98v-3.02H2.58a10 10 0 000 9.99l2.87-3z"
                />
                <path
                  fill="#EA4335"
                  d="M12 7.58c1.47 0 2.77.5 3.8 1.48l2.85-2.85A10 10 0 0012 2a10 10 0 00-8.85 5.58l2.87 2.87a6.5 6.5 0 015.98-3.87z"
                />
              </svg>
              Đăng nhập với Google
            </button>

            <button
              class="w-full flex items-center justify-center py-3 px-4 border border-transparent rounded-xl shadow-sm text-sm font-medium text-gray-700 bg-white transition-all duration-300 hover:bg-gray-50 hover:shadow-md"
            >
              <svg
                class="h-5 w-5 mr-2"
                fill="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <path
                  fill="#1877F2"
                  d="M22.675 0H1.325C.594 0 0 .593 0 1.326v21.348C0 23.406.593 24 1.325 24h11.495v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.657-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.796.715-1.796 1.763v2.31h3.587l-.467 3.622h-3.12V24h6.116c.73 0 1.324-.594 1.324-1.326V1.326C24 .593 23.406 0 22.675 0z"
                />
              </svg>
              Đăng nhập với Facebook
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import axios from 'axios'
import {
  UserPlusIcon,
  UserCircleIcon,
  EnvelopeIcon,
  LockClosedIcon,
  ArrowRightIcon
} from '@heroicons/vue/24/outline'
import { useRouter } from 'vue-router'

const router = useRouter()

const formData = ref({
  name: '',
  email: '',
  password: '',
  confirmPassword: '',
  terms: false
})

const errorMessage = ref('')

const handleSubmit = async () => {
  errorMessage.value = ''

  if (!formData.value.terms) {
    errorMessage.value = 'Bạn cần đồng ý với điều khoản dịch vụ và chính sách quyền riêng tư.'
    return
  }

  if (formData.value.password !== formData.value.confirmPassword) {
    errorMessage.value = 'Mật khẩu và xác nhận mật khẩu không khớp.'
    return
  }

  try {
    const response = await axios.post('http://127.0.0.1:8000/api/register', {
      name: formData.value.name,
      email: formData.value.email,
      password: formData.value.password
    })

    alert(response.data.message)

    // Reset form
    formData.value = {
      name: '',
      email: '',
      password: '',
      confirmPassword: '',
      terms: false
    }

    // Chuyển sang trang đăng nhập
    router.push('/login')
  } catch (error) {
    if (error.response) {
      // The request was made and the server responded with a status code
      // that falls out of the range of 2xx
      if (error.response.data.errors) {
        // Validation errors from Laravel
        const errors = error.response.data.errors
        const messages = Object.values(errors).flat()
        errorMessage.value = messages.join(', ')
      } else if (error.response.data.message) {
        // Other errors with a message from the backend
        errorMessage.value = error.response.data.message
      } else {
        // Generic HTTP error without a specific message
        errorMessage.value = `Lỗi từ máy chủ: ${error.response.status} ${error.response.statusText}`
      }
    } else if (error.request) {
      // The request was made but no response was received
      // `error.request` is an instance of XMLHttpRequest in the browser and an instance of
      // http.ClientRequest in node.js
      errorMessage.value = 'Không thể kết nối đến máy chủ. Vui lòng kiểm tra kết nối mạng của bạn hoặc thử lại sau.'
    } else {
      // Something happened in setting up the request that triggered an Error
      errorMessage.value = 'Đã xảy ra lỗi khi gửi yêu cầu đăng ký: ' + error.message
    }
    console.error('Registration error:', error)
  }
}

const handleLogin = () => {
  console.log("Vào trang Login thành công")
  router.push('/login')
}
</script>

<style scoped>
/* Nếu muốn custom thêm thì thêm ở đây */
</style>
