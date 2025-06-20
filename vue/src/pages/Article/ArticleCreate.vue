<template>
  <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md mt-8">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Tạo Bài Viết Mới</h1>

    <form @submit.prevent="handleSubmit">
      <div class="mb-4">
        <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Tiêu Đề Bài Viết:</label>
        <input
          type="text"
          id="title"
          v-model="article.title"
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          required
        />
      </div>

      <div class="mb-4">
        <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Nội Dung Bài Viết:</label>
        <textarea
          id="content"
          v-model="article.content"
          rows="10"
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          required
        ></textarea>
      </div>

      <div class="mb-4">
        <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Hình Ảnh (Tùy chọn):</label>
        <input
          type="file"
          id="image"
          @change="handleImageUpload"
          accept="image/*"
          class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
        />
        <div v-if="imagePreviewUrl" class="mt-4">
          <img :src="imagePreviewUrl" alt="Image Preview" class="max-w-xs h-auto rounded-md shadow-md" />
        </div>
      </div>

      <div v-if="errorMessage" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
        <strong class="font-bold">Lỗi!</strong>
        <span class="block sm:inline">{{ errorMessage }}</span>
      </div>

      <div v-if="successMessage" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <strong class="font-bold">Thành công!</strong>
        <span class="block sm:inline">{{ successMessage }}</span>
      </div>

      <div class="flex items-center justify-between">
        <button
          type="submit"
          class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300"
          :disabled="isSubmitting"
        >
          {{ isSubmitting ? 'Đang Đăng...' : 'Đăng Bài Viết' }}
        </button>
        <router-link to="/" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
          Hủy
        </router-link>
      </div>
    </form>
  </div>
</template>

<script setup lang="ts">
import { ref } from 'vue';
import axios from 'axios';
import { useRouter } from 'vue-router';
import { useUserStore } from '@/stores/useUserStore';

const router = useRouter();
const userStore = useUserStore();

interface ArticleForm {
  title: string;
  content: string;
  image: File | null;
}

const article = ref<ArticleForm>({
  title: '',
  content: '',
  image: null,
});

const imagePreviewUrl = ref<string | null>(null);
const errorMessage = ref<string | null>(null);
const successMessage = ref<string | null>(null);
const isSubmitting = ref<boolean>(false);

const handleImageUpload = (event: Event) => {
  const target = event.target as HTMLInputElement;
  if (target.files && target.files.length > 0) {
    article.value.image = target.files[0];
    imagePreviewUrl.value = URL.createObjectURL(target.files[0]);
  } else {
    article.value.image = null;
    imagePreviewUrl.value = null;
  }
};

const handleSubmit = async () => {
  errorMessage.value = null;
  successMessage.value = null;
  isSubmitting.value = true;

  if (!userStore.isLoggedIn) {
    errorMessage.value = 'Bạn phải đăng nhập để tạo bài viết mới.';
    isSubmitting.value = false;
    return;
  }

  const formData = new FormData();
  formData.append('title', article.value.title);
  formData.append('content', article.value.content);
  if (article.value.image) {
    formData.append('image', article.value.image);
  }

  try {
    const response = await axios.post('/api/articles', formData, {
      headers: {
        'Content-Type': 'multipart/form-data',
        Authorization: `Bearer ${userStore.token}`,
      },
    });
    successMessage.value = response.data.message || 'Bài viết đã được tạo thành công!';
    // Optionally clear form or redirect
    article.value = { title: '', content: '', image: null };
    imagePreviewUrl.value = null;
    
    // Redirect after a short delay
    setTimeout(() => {
        router.push('/'); // Or wherever you want to redirect after creation
    }, 2000);

  } catch (error: any) {
    console.error('Lỗi khi tạo bài viết:', error);
    errorMessage.value = error.response?.data?.message || 'Có lỗi xảy ra khi tạo bài viết.';
  } finally {
    isSubmitting.value = false;
  }
};
</script>

<style scoped>
/* Add any specific styles here */
</style> 