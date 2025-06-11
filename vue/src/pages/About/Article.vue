<template>
    <main class="max-w-7xl mx-auto p-4 bg-gray-50 min-h-screen">
      <div class="flex gap-6">
        <!-- Main Content Area -->
        <div class="flex-1 max-w-4xl">
          <!-- Featured Article -->
          <article class="bg-white rounded-lg mb-6 overflow-hidden">
            <div class="relative">
              <img 
                src="https://via.placeholder.com/800x450?text=QLED+vs+QD-MiniLED" 
                alt="TV QLED và QD-MiniLED: khác nhau nhiều, cần biết để chọn đúng" 
                class="w-full h-64 md:h-80 object-cover"
              >
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
              <div class="absolute bottom-4 left-4 right-4 text-white">
                <h1 class="text-2xl md:text-3xl font-bold mb-2">
                  TV QLED và QD-MiniLED: khác nhau nhiều, cần biết để chọn đúng
                </h1>
                <div class="text-sm opacity-90">
                  <span class="font-medium">cuhiep</span>
                </div>
              </div>
            </div>
          </article>
  
          <!-- Secondary Articles Grid -->
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-6">
            <!-- Article 1 -->
            <article class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
              <div class="relative">
                <img 
                  src="https://via.placeholder.com/300x200?text=iOS+26+Features" 
                  alt="Tổng hợp những tính năng mới trên iOS 26" 
                  class="w-full h-32 object-cover"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                <div class="absolute bottom-2 left-2 right-2">
                  <h3 class="text-white text-sm font-semibold line-clamp-2">
                    [Video] Tổng hợp những tính năng mới trên iOS 26
                  </h3>
                </div>
              </div>
              <div class="p-3">
                <div class="text-xs text-gray-500 mb-1">
                  <span class="font-medium">Anh Tú</span>
                </div>
              </div>
            </article>
  
            <!-- Article 2 -->
            <article class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
              <div class="relative">
                <img 
                  src="https://via.placeholder.com/300x200?text=iOS+26+vs+iOS+18" 
                  alt="So sánh giao diện iOS 26 VS iOS 18" 
                  class="w-full h-32 object-cover"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                <div class="absolute bottom-2 left-2 right-2">
                  <h3 class="text-white text-sm font-semibold line-clamp-2">
                    So sánh giao diện iOS 26 VS iOS 18: Quá trời khác!
                  </h3>
                </div>
              </div>
              <div class="p-3">
                <p class="text-xs text-gray-600 mb-2 line-clamp-2">
                  Vào ngày 10/6/2025, Apple đã ra mắt iOS 26 và phiên bản phần mềm này mang lại nhiều thay đổi đáng chú ý về mặt giao diện so với iOS 18 (Apple gọi là thiết kế Liquid Glass)...
                </p>
                <div class="text-xs text-gray-500">
                  <span class="font-medium">Cao - Foxtek</span>
                </div>
              </div>
            </article>
  
            <!-- Article 3 -->
            <article class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
              <div class="relative">
                <img 
                  src="https://via.placeholder.com/300x200?text=iOS+26+Beta+Guide" 
                  alt="Hướng dẫn cách nâng cấp lên iOS 26 beta" 
                  class="w-full h-32 object-cover"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                <div class="absolute bottom-2 left-2 right-2">
                  <h3 class="text-white text-sm font-semibold line-clamp-2">
                    Hướng dẫn cách nâng cấp lên iOS 26 beta
                  </h3>
                </div>
              </div>
              <div class="p-3">
                <p class="text-xs text-gray-600 mb-2 line-clamp-2">
                  Bài viết hướng dẫn chi tiết cách cài đặt bản iOS 26 beta mới nhất trên iPhone của bạn...
                </p>
                <div class="text-xs text-gray-500">
                  <span class="font-medium">Anh Tú</span>
                </div>
              </div>
            </article>
          </div>
  
          <!-- WWDC Article -->
          <article class="bg-white rounded-lg shadow-sm overflow-hidden">
            <div class="relative">
              <img 
                src="https://via.placeholder.com/800x300?text=WWDC+2025+Liquid+Glass" 
                alt="WWDC 25: Người dùng hào hức vì liquid glass đẹp" 
                class="w-full h-48 object-cover"
              >
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
              <div class="absolute bottom-4 left-4 right-4 text-white">
                <h2 class="text-xl md:text-2xl font-bold mb-2">
                  WWDC 25: Người dùng hào hức vì "liquid glass" đẹp, còn cả phố Wall thì vẫn lo ngay ngáy
                </h2>
                <p class="text-sm opacity-90 mb-2">
                  Cộng đồng công nghệ đang rất hào hứng với thiết kế mới Liquid Glass được giới thiệu tại WWDC 2025, trong khi các nhà đầu tư vẫn còn lo ngại về hiệu suất...
                </p>
                <div class="text-xs">
                  Nguồn: <span class="font-medium">PW</span> 🔥
                </div>
              </div>
            </div>
          </article>
        </div>
  
        <!-- Sidebar -->
        <aside class="w-80 flex-shrink-0">
          <div class="bg-white rounded-lg shadow-sm p-4 sticky top-4">
            <div class="flex items-center justify-between mb-4">
              <h2 class="text-lg font-bold text-gray-900">Xem nhanh</h2>
              <button class="text-blue-600 text-sm hover:underline font-medium">
                Xem tất cả
              </button>
            </div>
            
            <div class="space-y-3">
              <div v-for="(item, index) in quickLinks" :key="index" class="flex gap-3 hover:bg-gray-50 p-2 rounded-lg transition-colors cursor-pointer">
                <div class="flex-shrink-0">
                  <img 
                    :src="item.image" 
                    :alt="item.title" 
                    class="w-16 h-12 object-cover rounded"
                  >
                </div>
                <div class="flex-1 min-w-0">
                  <h3 class="text-sm font-medium text-gray-900 line-clamp-2 mb-1">
                    {{ item.title }}
                  </h3>
                  <div class="flex items-center text-xs text-gray-500">
                    <span class="w-2 h-2 bg-blue-600 rounded-full mr-2"></span>
                    {{ item.source }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </main>
  </template>
  
  <script lang="ts">
  import { defineComponent } from 'vue';
  
  export default defineComponent({
    name: 'Article',
    data() {
      return {
        quickLinks: [
          {
            title: 'Mỹ tiếp tục đình chỉ xuất khẩu động cơ và phụ tùng đối với dòng COMAC...',
            image: 'https://via.placeholder.com/80x60?text=COMAC',
            source: 'Tech News'
          },
          {
            title: 'Lỗ hổng bảo mật có thể khiến số điện thoại liên kết với tài khoản Google...',
            image: 'https://via.placeholder.com/80x60?text=Security',
            source: 'Security Alert'
          },
          {
            title: 'Giỡn chơi xấu với iOS mới mà vợ giận luôn. Tim Cook hại mình rồi...',
            image: 'https://via.placeholder.com/80x60?text=iOS',
            source: 'User Story'
          },
          {
            title: 'Vật liệu từ những con tàu đắm trong Thế chiến thứ 2 lại lời giải cho bức xạ...',
            image: 'https://via.placeholder.com/80x60?text=Science',
            source: 'Science'
          },
          {
            title: 'Các nhà khoa học đang phát triển một thế hệ trí tuệ nhân tạo (AI) hoàn...',
            image: 'https://via.placeholder.com/80x60?text=AI',
            source: 'AI Research'
          },
          {
            title: 'Sam Altman: Mỗi truy vấn ChatGPT sẽ sử dụng lượng nước tương đương...',
            image: 'https://via.placeholder.com/80x60?text=ChatGPT',
            source: 'Tech Report'
          },
          {
            title: 'Chuỗi những tin vỉ sẻt có thể là tác nhân tạo ra thành phần cơ bản của s...',
            image: 'https://via.placeholder.com/80x60?text=Space',
            source: 'Space News'
          },
          {
            title: 'Loài người đã sử dụng xương cá voi để chế tạo dụng cụ săn bắn từ 20.0...',
            image: 'https://via.placeholder.com/80x60?text=History',
            source: 'History'
          }
        ]
      };
    }
  });
  </script>
  
  <style scoped>
  .line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
  
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
  </style>