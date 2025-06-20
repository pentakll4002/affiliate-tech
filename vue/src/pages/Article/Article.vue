<template>
    <main class="max-w-7xl mx-auto p-4 bg-gray-50 min-h-screen">
      <div class="flex flex-col lg:flex-row gap-6">
        <!-- Main Content Area -->
        <div class="flex-1 max-w-4xl">
          <!-- Featured Article -->
          <router-link v-if="featuredArticle" :to="{ name: 'ArticleDetail', params: { id: featuredArticle.id } }" class="block bg-white rounded-xl mb-6 overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
            <div class="relative">
              <img 
                :src="getFullImageUrl(featuredArticle.image_url)"
                :alt="featuredArticle.title" 
                class="w-full h-64 md:h-80 object-cover"
                loading="lazy"
              >
              <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
              <div class="absolute bottom-4 left-4 right-4 text-white">
                <span class="inline-block bg-blue-600 text-xs px-3 py-1 rounded-full mb-2 font-medium">
                  CÔNG NGHỆ
                </span>
                <h1 class="text-3xl md:text-4xl font-bold mb-2 leading-tight">
                  {{ featuredArticle.title }}
                </h1>
                <div class="flex items-center text-sm opacity-90">
                  <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center mr-2">
                    <span class="text-xs font-bold">C</span>
                  </div>
                  <span class="font-medium">{{ featuredArticle.user.name }}</span>
                  <span class="mx-2">•</span>
                  <time>{{ formatDate(new Date(featuredArticle.created_at)) }}</time>
                </div>
              </div>
            </div>
          </router-link>
  
          <!-- Secondary Articles Grid -->
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-6">
            <router-link v-for="article in articles.slice(1, 4)" :key="article.id" :to="{ name: 'ArticleDetail', params: { id: article.id } }" class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-all duration-300 hover:-translate-y-1 transform hover:scale-105">
              <div class="relative">
                <img 
                  :src="getFullImageUrl(article.image_url)" 
                  :alt="article.title" 
                  class="w-full h-40 object-cover"
                  loading="lazy"
                >
                <div class="absolute top-2 left-2">
                  <span class="bg-red-500 text-white text-xs px-2 py-1 rounded font-bold">TIN MỚI</span>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                <div class="absolute bottom-2 left-2 right-2">
                  <h3 class="text-white text-sm font-semibold line-clamp-2">
                    {{ article.title }}
                  </h3>
                </div>
              </div>
              <div class="p-3">
                <p class="text-sm text-gray-600 mb-2 line-clamp-2">
                  {{ article.content }}
                </p>
                <div class="flex items-center text-xs text-gray-500 mb-1">
                  <div class="w-6 h-6 bg-orange-500 rounded-full flex items-center justify-center mr-2">
                    <span class="text-xs font-bold text-white">A</span>
                  </div>
                  <span class="font-medium">{{ article.user.name }}</span> 
                </div>
              </div>
            </router-link>
          </div>
  
          <!-- Comments Section -->
          <section class="mt-8 bg-white rounded-xl shadow-sm p-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 border-b pb-3">Câu hỏi cần bạn giúp</h2>
            
            <!-- Comment 1 -->
            <div class="mb-6 pb-6 border-b border-gray-100">
              <h3 class="text-xl font-semibold text-gray-900 mb-3">Tư vấn cửa hàng mua iPhone cũ Hà Nội</h3>
              <p class="text-gray-700 mb-4">
                Nhờ các pro tư vấn giúp, mình đang cần mua máy iPhone (14 Pro Max, Plus, hay 14) cũ tầm giá 15tr. 
                Nhờ các pro tư vấn mua máy nào hợp lý và cửa hàng uy tín tại Hà Nội.
              </p>
              
              <div class="bg-blue-50 p-4 rounded-lg mb-4">
                <h4 class="font-medium text-gray-900 mb-2">Địa chỉ uy tín:</h4>
                <ul class="list-disc pl-5 space-y-1">
                  <li>Phân hồi - Địa chỉ uy tín cho iPhone cũ</li>
                  <li>Tọp 10 Plugin tạo mục lục bài viết cho WordPress 2025 (Chuẩn SEO & UX)</li>
                </ul>
              </div>
              
              <p class="text-gray-700 mb-4">
                Với thực tế 73% người đọc chỉ lướt qua nội dung, làm thế nào để đảm bảo thông điệp của bạn được truyền tải? 
                Giải pháp nằm ở mục lục bài viết – công cụ thiết yếu để giữ chân khách truy cập. 
                Khám phá ngay 10 plugin WordPress hàng đầu mà Tino đã chọn...
              </p>
              
              <div class="flex items-center text-sm text-gray-500 mt-4">
                <div class="w-8 h-8 bg-pink-500 rounded-full flex items-center justify-center text-white font-bold mr-2">
                  H
                </div>
                <div>
                  <span class="font-medium">Hồng Nhí</span>
                  <span class="ml-2">1008 • 1h trước</span>
                </div>
              </div>
            </div>
  
            <!-- Comment 2 -->
            <div class="mb-6 pb-6 border-b border-gray-100">
              <div class="flex">
                <div class="flex-shrink-0 mr-3">
                  <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white font-bold">
                    T
                  </div>
                </div>
                <div class="flex-1">
                  <p class="text-gray-700 mb-3">
                    <span class="font-medium">Phản hồi:</span>
                    WWDC 25: Người dùng háo hức vì "liquid glass" đẹp, còn cả phố Wall thì vẫn lo ngay ngáy
                  </p>
                  <p class="text-gray-700">
                    Giao diện nó chỉ gây hứng thú được thời gian đầu. Cái cốt lõi vẫn phải là hiệu năng và tính năng. 
                    Mà các tính năng AI Apple làm thế nào ae biết rồi đó.
                  </p>
                </div>
              </div>
              <div class="flex items-center text-sm text-gray-500 mt-4 ml-11">
                <span class="font-medium">Thương Bộ</span>
              </div>
            </div>
  
            <!-- Comment 3 -->
            <div class="mb-6 pb-6 border-b border-gray-100">
              <div class="flex">
                <div class="flex-shrink-0 mr-3">
                  <div class="w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold">
                    P
                  </div>
                </div>
                <div class="flex-1">
                  <p class="text-gray-700 mb-3">
                    <span class="font-medium">Phản hồi:</span>
                    Tình huống "cần gấp" khăn ướt mẹ nên biết
                  </p>
                  <p class="text-gray-700">
                    Không chỉ dùng để lau tay hay vệ sinh cho bé, khăn ướt còn là "vật bất ly thân" trong rất nhiều tình huống thực tế. 
                    Mẹ càng sớm chuẩn bị và mang theo, càng đỡ vất vả khi gặp các tình huống bất ngờ...
                  </p>
                </div>
              </div>
            </div>
  
            <!-- Comment 4 -->
            <div>
              <div class="flex">
                <div class="flex-shrink-0 mr-3">
                  <div class="w-8 h-8 bg-red-500 rounded-full flex items-center justify-center text-white font-bold">
                    B
                  </div>
                </div>
                <div class="flex-1">
                  <p class="text-gray-700 mb-3">
                    <span class="font-medium">Phản hồi:</span>
                    Bột ăn dặm Aptamil có mấy vị? Mẹ nên biết trước khi mua!
                  </p>
                  <p class="text-gray-700">
                    Chia sẻ kinh nghiệm chọn bột ăn dặm cho bé: Aptamil có đáng mua? 
                    Chào anh em, Dạo gần đây mình đang tìm hiểu về các loại bột ăn dặm cho bé từ 6 tháng tuổi trở lên. 
                    Thấy nhiều mẹ review tốt về dòng bột của Aptamil nên cũng có tìm hiểu thử.
                  </p>
                </div>
              </div>
            </div>
          </section>
        </div>
  
        <!-- Sidebar -->
        <aside class="w-full lg:w-80 flex-shrink-0">
            <!-- Đã ẩn các phần mock: Xem nhanh, Tags phổ biến, Chủ đề nổi bật -->
            <!-- Nếu sau này có API thực tế, sẽ bổ sung lại -->
        </aside>
      </div>
    </main>
</template>

<script setup lang="ts">
import { ref, onMounted } from 'vue';
import axios from 'axios';
import { useRouter } from 'vue-router';

interface Article {
  id: number;
  user_id: number;
  title: string;
  content: string;
  image_url: string;
  created_at: string;
  updated_at: string;
  user: {
    name: string;
  };
}

const articles = ref<Article[]>([]);
const featuredArticle = ref<Article | null>(null);
const router = useRouter();

onMounted(async () => {
  try {
    const response = await axios.get('/api/articles');
    articles.value = response.data;
    if (articles.value.length > 0) {
      featuredArticle.value = articles.value[0]; // Set the first article as featured
    }
  } catch (error) {
    console.error('Error fetching articles:', error);
  }
});

function getFullImageUrl(url: string | null) {
  if (!url) return '';
  if (url.startsWith('http')) return url;
  return `http://127.0.0.1:8000${url}`;
}

function formatDate(date: Date): string {
  return new Intl.DateTimeFormat('vi-VN', {
    day: '2-digit',
    month: '2-digit',
    year: 'numeric'
  }).format(date);
}
</script>

<style scoped>
.line-clamp-2 {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.line-clamp-3 {
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

* {
  font-family: 'Inter', sans-serif;
}

/* Custom scrollbar for sidebar */
aside::-webkit-scrollbar {
  width: 4px;
}

aside::-webkit-scrollbar-track {
  background: #f1f5f9;
}

aside::-webkit-scrollbar-thumb {
  background: #cbd5e1;
  border-radius: 2px;
}

aside::-webkit-scrollbar-thumb:hover {
  background: #94a3b8;
}
</style>