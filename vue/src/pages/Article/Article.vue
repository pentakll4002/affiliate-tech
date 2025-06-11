<template>
    <main class="max-w-7xl mx-auto p-4 bg-gray-50 min-h-screen">
      <div class="flex flex-col lg:flex-row gap-6">
        <!-- Main Content Area -->
        <div class="flex-1 max-w-4xl">
          <!-- Featured Article -->
          <article class="bg-white rounded-xl mb-6 overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
            <div class="relative">
              <img 
                src="https://via.placeholder.com/800x450/4338ca/ffffff?text=QLED+vs+QD-MiniLED" 
                alt="TV QLED và QD-MiniLED: khác nhau nhiều, cần biết để chọn đúng" 
                class="w-full h-64 md:h-80 object-cover"
                loading="lazy"
              >
              <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
              <div class="absolute bottom-4 left-4 right-4 text-white">
                <span class="inline-block bg-blue-600 text-xs px-3 py-1 rounded-full mb-2 font-medium">
                  CÔNG NGHỆ
                </span>
                <h1 class="text-3xl md:text-4xl font-bold mb-2 leading-tight">
                  TV QLED và QD-MiniLED: khác nhau nhiều, cần biết để chọn đúng
                </h1>
                <div class="flex items-center text-sm opacity-90">
                  <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center mr-2">
                    <span class="text-xs font-bold">C</span>
                  </div>
                  <span class="font-medium">cuhiep</span>
                  <span class="mx-2">•</span>
                  <time>{{ formatDate(new Date()) }}</time>
                </div>
              </div>
            </div>
          </article>
  
          <!-- Secondary Articles Grid -->
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-6">
            <!-- Article 1 -->
            <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-all duration-300 hover:-translate-y-1 transform hover:scale-105">
              <div class="relative">
                <img 
                  src="https://via.placeholder.com/300x200/ec4899/ffffff?text=iOS+26+Features" 
                  alt="Tổng hợp những tính năng mới trên iOS 26" 
                  class="w-full h-40 object-cover"
                  loading="lazy"
                >
                <div class="absolute top-2 left-2">
                  <span class="bg-red-500 text-white text-xs px-2 py-1 rounded font-bold">VIDEO</span>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                <div class="absolute bottom-2 left-2 right-2">
                  <h3 class="text-white text-sm font-semibold line-clamp-2">
                    Tổng hợp những tính năng mới trên iOS 26
                  </h3>
                </div>
              </div>
              <div class="p-3">
                <div class="flex items-center text-xs text-gray-500 mb-1">
                  <div class="w-6 h-6 bg-orange-500 rounded-full flex items-center justify-center mr-2">
                    <span class="text-xs font-bold text-white">A</span>
                  </div>
                  <span class="font-medium">Anh Tú</span>
                </div>
              </div>
            </article>
  
            <!-- Article 2 -->
            <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-all duration-300 hover:-translate-y-1 transform hover:scale-105">
              <div class="relative">
                <img 
                  src="https://via.placeholder.com/300x200/10b981/ffffff?text=iOS+26+vs+iOS+18" 
                  alt="So sánh giao diện iOS 26 VS iOS 18" 
                  class="w-full h-40 object-cover"
                  loading="lazy"
                >
                <div class="absolute top-2 right-2">
                  <span class="bg-green-500 text-white text-xs px-2 py-1 rounded font-bold">HOT</span>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                <div class="absolute bottom-2 left-2 right-2">
                  <h3 class="text-white text-sm font-semibold line-clamp-2">
                    So sánh giao diện iOS 26 VS iOS 18: Quá trời khác!
                  </h3>
                </div>
              </div>
              <div class="p-3">
                <p class="text-sm text-gray-600 mb-2 line-clamp-2">
                  Vào ngày 10/6/2025, Apple đã ra mắt iOS 26 với nhiều thay đổi đáng chú ý về giao diện so với iOS 18...
                </p>
                <div class="flex items-center text-xs text-gray-500">
                  <div class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center mr-2">
                    <span class="text-xs font-bold text-white">C</span>
                  </div>
                  <span class="font-medium">Cao - Foxtek</span>
                </div>
              </div>
            </article>
  
            <!-- Article 3 -->
            <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-all duration-300 hover:-translate-y-1 transform hover:scale-105">
              <div class="relative">
                <img 
                  src="https://via.placeholder.com/300x200/f59e0b/ffffff?text=iOS+26+Beta+Guide" 
                  alt="Hướng dẫn cách nâng cấp lên iOS 26 beta" 
                  class="w-full h-40 object-cover"
                  loading="lazy"
                >
                <div class="absolute top-2 left-2">
                  <span class="bg-yellow-500 text-white text-xs px-2 py-1 rounded font-bold">HƯỚNG DẪN</span>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                <div class="absolute bottom-2 left-2 right-2">
                  <h3 class="text-white text-sm font-semibold line-clamp-2">
                    Hướng dẫn cách nâng cấp lên iOS 26 beta
                  </h3>
                </div>
              </div>
              <div class="p-3">
                <p class="text-sm text-gray-600 mb-2 line-clamp-2">
                  Bài viết hướng dẫn chi tiết cách cài đặt bản iOS 26 beta mới nhất trên iPhone...
                </p>
                <div class="flex items-center text-xs text-gray-500">
                  <div class="w-6 h-6 bg-orange-500 rounded-full flex items-center justify-center mr-2">
                    <span class="text-xs font-bold text-white">A</span>
                  </div>
                  <span class="font-medium">Anh Tú</span>
                </div>
              </div>
            </article>
          </div>
  
          <!-- WWDC Article -->
          <article class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-all duration-300">
            <div class="relative">
              <img 
                src="https://via.placeholder.com/800x300/6366f1/ffffff?text=WWDC+2025+Liquid+Glass" 
                alt="WWDC 25: Người dùng hào hứng vì liquid glass đẹp" 
                class="w-full h-48 object-cover"
                loading="lazy"
              >
              <div class="absolute top-4 left-4">
                <span class="bg-purple-600 text-white text-xs px-3 py-1 rounded-full font-bold">
                  🔥 TRENDING
                </span>
              </div>
              <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
              <div class="absolute bottom-4 left-4 right-4 text-white">
                <h2 class="text-2xl md:text-3xl font-bold mb-2 leading-tight">
                  WWDC 25: Người dùng hào hứng vì "liquid glass" đẹp, còn cả phố Wall thì vẫn lo ngay ngáy
                </h2>
                <p class="text-sm opacity-90 mb-3 line-clamp-2">
                  Cộng đồng công nghệ đang rất hào hứng với thiết kế mới Liquid Glass tại WWDC 2025...
                </p>
                <div class="flex items-center text-xs">
                  <div class="w-8 h-8 bg-red-600 rounded-full flex items-center justify-center mr-2">
                    <span class="text-xs font-bold">PW</span>
                  </div>
                  <span class="font-medium">PW</span>
                  <span class="mx-2">•</span>
                  <time>{{ formatDate(new Date()) }}</time>
                </div>
              </div>
            </div>
          </article>
  
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
          <div class="bg-white rounded-xl shadow-sm p-5 sticky top-4">
            <div class="flex items-center justify-between mb-4">
              <h2 class="text-lg font-bold text-gray-900 flex items-center">
                <span class="w-2 h-2 bg-blue-600 rounded-full mr-2"></span>
                Xem nhanh
              </h2>
              <button class="text-blue-600 text-sm hover:underline font-medium hover:text-blue-800 transition-colors">
                Xem tất cả
              </button>
            </div>
            
            <div class="space-y-3">
              <div 
                v-for="(item, index) in quickLinks" 
                :key="index" 
                class="flex gap-3 hover:bg-gray-50 p-2 rounded-lg transition-colors cursor-pointer group"
              >
                <div class="flex-shrink-0">
                  <img 
                    :src="item.image" 
                    :alt="item.title" 
                    class="w-16 h-12 object-cover rounded group-hover:scale-105 transition-transform"
                    loading="lazy"
                  >
                </div>
                <div class="flex-1 min-w-0">
                  <h3 class="text-sm font-medium text-gray-900 line-clamp-2 mb-1 group-hover:text-blue-600 transition-colors">
                    {{ item.title }}
                  </h3>
                  <div class="flex items-center text-xs text-gray-500">
                    <span class="w-2 h-2 bg-blue-600 rounded-full mr-2"></span>
                    <span class="font-medium">{{ item.source }}</span>
                    <span class="mx-1">•</span>
                    <time>{{ item.time }}</time>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <!-- Popular Tags -->
          <div class="bg-white rounded-xl shadow-sm p-5 mt-4 sticky top-96">
            <h3 class="text-lg font-bold text-gray-900 mb-3">Tags phổ biến</h3>
            <div class="flex flex-wrap gap-2">
              <span 
                v-for="tag in popularTags" 
                :key="tag"
                class="bg-gray-100 hover:bg-blue-100 text-gray-700 hover:text-blue-700 px-3 py-1 rounded-full text-xs font-medium cursor-pointer transition-colors"
              >
                #{{ tag }}
              </span>
            </div>
          </div>
  
          <!-- Trending Topics -->
          <div class="bg-white rounded-xl shadow-sm p-5 mt-4">
            <h3 class="text-lg font-bold text-gray-900 mb-3">Chủ đề nổi bật</h3>
            <div class="space-y-2">
              <div v-for="topic in trendingTopics" :key="topic" class="flex items-center">
                <div class="w-2 h-2 bg-blue-600 rounded-full mr-2"></div>
                <span class="text-sm text-gray-700 hover:text-blue-600 cursor-pointer">{{ topic }}</span>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </main>
  </template>
  
  <script setup lang="ts">
  interface QuickLink {
    title: string;
    image: string;
    source: string;
    time: string;
  }
  
  const quickLinks: QuickLink[] = [
    {
      title: 'Mỹ tiếp tục đình chỉ xuất khẩu động cơ và phụ tùng đối với dòng COMAC...',
      image: 'https://via.placeholder.com/80x60/ef4444/ffffff?text=COMAC',
      source: 'Tech News',
      time: '2h trước'
    },
    {
      title: 'Lỗ hổng bảo mật có thể khiến số điện thoại liên kết với tài khoản Google...',
      image: 'https://via.placeholder.com/80x60/f97316/ffffff?text=Security',
      source: 'Security Alert',
      time: '4h trước'
    },
    {
      title: 'Giỡn chơi xấu với iOS mới mà vợ giận luôn. Tim Cook hại mình rồi...',
      image: 'https://via.placeholder.com/80x60/8b5cf6/ffffff?text=iOS',
      source: 'User Story',
      time: '6h trước'
    },
    {
      title: 'Vật liệu từ những con tàu đắm trong Thế chiến thứ 2 lại lời giải cho bức xạ...',
      image: 'https://via.placeholder.com/80x60/06b6d4/ffffff?text=Science',
      source: 'Science',
      time: '8h trước'
    },
    {
      title: 'Các nhà khoa học đang phát triển một thế hệ trí tuệ nhân tạo (AI) hoàn...',
      image: 'https://via.placeholder.com/80x60/10b981/ffffff?text=AI',
      source: 'AI Research',
      time: '10h trước'
    },
    {
      title: 'Sam Altman: Mỗi truy vấn ChatGPT sẽ sử dụng lượng nước tương đương...',
      image: 'https://via.placeholder.com/80x60/f59e0b/ffffff?text=ChatGPT',
      source: 'Tech Report',
      time: '12h trước'
    },
    {
      title: 'Chuỗi những tia vị sét có thể là tác nhân tạo ra thành phần cơ bản của s...',
      image: 'https://via.placeholder.com/80x60/ec4899/ffffff?text=Space',
      source: 'Space News',
      time: '1 ngày trước'
    },
    {
      title: 'Loài người đã sử dụng xương cá voi để chế tạo dụng cụ săn bắn từ 20.0...',
      image: 'https://via.placeholder.com/80x60/84cc16/ffffff?text=History',
      source: 'History',
      time: '1 ngày trước'
    }
  ];
  
  const popularTags = [
    'iOS26', 'WWDC2025', 'LiquidGlass', 'Apple', 'AI', 'Tech', 'Mobile', 'Security'
  ];
  
  const trendingTopics = [
    'Công nghệ màn hình QLED',
    'So sánh iOS 26 vs iOS 18',
    'Hướng dẫn nâng cấp iOS',
    'Tin tức WWDC 2025',
    'Bảo mật điện thoại',
    'Xu hướng AI 2025'
  ];
  
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