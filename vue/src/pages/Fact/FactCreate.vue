<template>
    <div class="relative w-full max-w-lg mx-auto p-4">
      <!-- Subtle Border Effect -->
      <div class="absolute -inset-1 bg-gradient-to-r from-blue-200 via-indigo-200 to-slate-200 rounded-3xl blur opacity-50"></div>
      
      <!-- Main Container -->
      <div class="relative bg-white/95 backdrop-blur-xl border border-gray-200 rounded-2xl p-8 shadow-xl">
        <!-- Close Button -->
        <button @click="$emit('close')" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 transition-colors duration-200">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
        <!-- Header -->
        <div class="text-center mb-8">
          <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
          </div>
          <h2 class="text-3xl font-bold bg-gradient-to-r from-slate-700 via-blue-600 to-indigo-600 bg-clip-text text-transparent mb-2">
            Tạo Fact Mới
          </h2>
          <p class="text-gray-600">Chia sẻ khoảnh khắc tuyệt vời của bạn</p>
        </div>

        <!-- Form -->
        <form @submit.prevent="submitFact" class="space-y-6">
          <!-- Main Image Field -->
          <div class="group">
            <label class="block text-gray-700 font-medium mb-2 group-focus-within:text-blue-600 transition-colors duration-200">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
              Ảnh chính
            </label>
            <div class="relative">
              <input 
                type="file"
                id="image"
                @change="handleImageUpload"
                class="w-full bg-white/80 border border-gray-300 rounded-xl px-4 py-3 text-gray-800 placeholder-gray-500 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all duration-300 shadow-sm"
                accept="image/*"
                required 
              />
              <div class="absolute inset-0 rounded-xl bg-gradient-to-r from-blue-500/0 via-indigo-500/0 to-blue-500/0 group-focus-within:from-blue-500/5 group-focus-within:via-indigo-500/5 group-focus-within:to-blue-500/5 transition-all duration-300 pointer-events-none"></div>
            </div>
            <div v-if="imagePreviewUrl" class="mt-4 flex justify-center">
              <img :src="imagePreviewUrl" alt="Image Preview" class="max-w-xs h-auto rounded-lg shadow-md" />
            </div>
          </div>

          <!-- Avatar Field -->
          <div class="group">
            <label class="block text-gray-700 font-medium mb-2 group-focus-within:text-blue-600 transition-colors duration-200">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              Ảnh đại diện
            </label>
            <div class="relative">
              <input 
                type="file"
                id="avatar"
                @change="handleAvatarUpload"
                class="w-full bg-white/80 border border-gray-300 rounded-xl px-4 py-3 text-gray-800 placeholder-gray-500 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all duration-300 shadow-sm"
                accept="image/*"
                required 
              />
              <div class="absolute inset-0 rounded-xl bg-gradient-to-r from-blue-500/0 via-indigo-500/0 to-blue-500/0 group-focus-within:from-blue-500/5 group-focus-within:via-indigo-500/5 group-focus-within:to-blue-500/5 transition-all duration-300 pointer-events-none"></div>
            </div>
            <div v-if="avatarPreviewUrl" class="mt-4 flex justify-center">
              <img :src="avatarPreviewUrl" alt="Avatar Preview" class="w-24 h-24 rounded-full object-cover shadow-md" />
            </div>
          </div>

          <!-- Submit Button -->
          <div class="pt-4">
            <button 
              type="submit" 
              class="group relative w-full overflow-hidden bg-gradient-to-r from-blue-500 via-indigo-500 to-blue-600 text-white font-semibold py-4 px-6 rounded-xl transition-all duration-300 hover:scale-105 hover:shadow-lg hover:shadow-blue-500/25 focus:outline-none focus:ring-4 focus:ring-blue-500/20"
            >
              <span class="relative z-10 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                </svg>
                Đăng Fact Ngay
              </span>
              <div class="absolute inset-0 bg-gradient-to-r from-blue-600 via-indigo-600 to-blue-700 translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
            </button>
          </div>
        </form>

        <!-- Success Message -->
        <div v-if="success" class="mt-6 transform transition-all duration-500 ease-out" :class="success ? 'scale-100 opacity-100' : 'scale-95 opacity-0'">
          <div class="bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 rounded-xl p-4 backdrop-blur-sm">
            <div class="flex items-center space-x-3">
              <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <div>
                <p class="text-green-700 font-semibold">Đăng fact thành công!</p>
                <p class="text-green-600 text-sm">Fact của bạn</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Error Message -->
        <div v-if="errorMessage" class="mt-6 transform transition-all duration-500 ease-out" :class="errorMessage ? 'scale-100 opacity-100' : 'scale-95 opacity-0'">
          <div class="bg-gradient-to-r from-red-50 to-rose-50 border border-red-200 rounded-xl p-4 backdrop-blur-sm">
            <div class="flex items-center space-x-3">
              <div class="w-8 h-8 bg-red-500 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </div>
              <div>
                <p class="text-red-700 font-semibold">Đăng fact thất bại!</p>
                <p class="text-red-600 text-sm">{{ errorMessage }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref, defineEmits } from 'vue'
  import axios from 'axios'
  
  axios.defaults.baseURL = 'http://127.0.0.1:8000'; // Set base URL for Axios

  // Define emits
  const emits = defineEmits(['fact-created', 'close']);

  const selectedImageFile = ref(null);
  const imagePreviewUrl = ref('')
  const selectedAvatarFile = ref(null)
  const avatarPreviewUrl = ref('')
  const uploadedImageUrl = ref('');
  const uploadedAvatarUrl = ref('');
  const success = ref(false)
  const errorMessage = ref('')
  
  async function handleImageUpload(event) {
    const file = event.target.files[0];
    if (file) {
      selectedImageFile.value = file;
      imagePreviewUrl.value = URL.createObjectURL(file); // For immediate client-side preview
      errorMessage.value = ''; // Clear previous errors

      const formData = new FormData();
      formData.append('image', file); // Ensure the key is 'image'

      try {
        const response = await axios.post('/api/image-upload', formData, { // Corrected endpoint
          headers: {
            'Content-Type': 'multipart/form-data'
          }
        });
        uploadedImageUrl.value = response.data.image_url; // Corrected to image_url
        console.log('Image uploaded successfully:', response.data.image_url);
      } catch (error) {
        console.error('Error uploading image:', error);
        errorMessage.value = 'Failed to upload image. Please try again.';
        selectedImageFile.value = null; // Clear file if upload fails
        imagePreviewUrl.value = '';
        uploadedImageUrl.value = '';
      }

    } else {
      selectedImageFile.value = null;
      imagePreviewUrl.value = '';
      uploadedImageUrl.value = '';
    }
  }
  
  // Function to handle avatar file selection and preview
  async function handleAvatarUpload(event) {
    const file = event.target.files[0];
    if (file) {
      selectedAvatarFile.value = file;
      avatarPreviewUrl.value = URL.createObjectURL(file); // For immediate client-side preview
      errorMessage.value = ''; // Clear previous errors

      const formData = new FormData();
      formData.append('avatar', file); // Corrected to 'avatar' for avatar upload

      try {
        const response = await axios.post('/api/image-upload', formData, { // Corrected endpoint
          headers: {
            'Content-Type': 'multipart/form-data'
          }
        });
        uploadedAvatarUrl.value = response.data.avatar_url; // Corrected to avatar_url
        console.log('Avatar uploaded successfully:', response.data.avatar_url);
      } catch (error) {
        console.error('Error uploading avatar:', error);
        errorMessage.value = 'Failed to upload avatar. Please try again.';
        selectedAvatarFile.value = null; // Clear file if upload fails
        avatarPreviewUrl.value = '';
        uploadedAvatarUrl.value = '';
      }
    } else {
      selectedAvatarFile.value = null;
      avatarPreviewUrl.value = '';
      uploadedAvatarUrl.value = '';
    }
  }

  async function submitFact() {
    success.value = false
    errorMessage.value = ''
  
    // Validate that images have been uploaded and URLs are available
    if (!uploadedImageUrl.value || !uploadedAvatarUrl.value) {
      errorMessage.value = 'Vui lòng tải lên cả ảnh chính và ảnh đại diện trước khi đăng Fact.';
      return;
    }

    const factData = { // Changed to a plain object for JSON submission
      image: uploadedImageUrl.value,
      avatar: uploadedAvatarUrl.value,
      // Add other fact fields here if necessary, e.g.,
      // title: factTitle.value,
      // description: factDescription.value,
      // user_id: userStore.user.id, // Example, if you have a user store
    };

    const authToken = localStorage.getItem('authToken');
    
    if (!authToken) {
      errorMessage.value = 'Bạn chưa đăng nhập. Vui lòng đăng nhập để tạo fact.';
      return;
    }

    console.log('Auth Token from localStorage:', authToken);
    console.log('Authorization Header being sent:', `Bearer ${authToken}`);

    try {
      const response = await axios.post('/api/facts', factData, { // Sending factData as JSON
        headers: {
          'Content-Type': 'application/json', // Keep as application/json
          Authorization: `Bearer ${authToken}`
        }
      })
      success.value = true
      console.log('Fact created successfully:', response.data)
      
      emits('fact-created', response.data.fact);

      // Reset fields after successful submission
      selectedImageFile.value = null;
      imagePreviewUrl.value = '';
      uploadedImageUrl.value = '';
      selectedAvatarFile.value = null;
      avatarPreviewUrl.value = '';
      uploadedAvatarUrl.value = '';
  
      setTimeout(() => {
        success.value = false
        emits('close');
      }, 3000)
  
    } catch (error) {
      console.error('Error creating fact:', error)
      if (axios.isAxiosError(error) && error.response) {
        errorMessage.value = error.response.data.message || 'Failed to create fact.'
        if (error.response.data.errors) {
          for (const key in error.response.data.errors) {
            errorMessage.value += `\n${key}: ${error.response.data.errors[key].join(', ')}`
          }
        }
      } else {
        errorMessage.value = 'An unexpected error occurred.'
      }
    }
  }
  </script>