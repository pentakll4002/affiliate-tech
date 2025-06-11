<template>
    <main class="max-w-7xl mx-auto p-4 bg-gray-50 min-h-screen">
      <div class="flex gap-6">
        <!-- Main Content Area -->
        <div class="flex-1 max-w-4xl">
          <!-- Featured Article -->
          <article class="bg-white rounded-lg mb-6 overflow-hidden shadow-md hover:shadow-lg transition-shadow">
            <div class="relative">
              <img 
                src="https://via.placeholder.com/800x450/4338ca/ffffff?text=QLED+vs+QD-MiniLED" 
                alt="TV QLED và QD-MiniLED: khác nhau nhiều, cần biết để chọn đúng" 
                class="w-full h-64 md:h-80 object-cover"
                loading="lazy"
              >
              <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
              <div class="absolute bottom-4 left-4 right-4 text-white">
                <span class="inline-block bg-blue-600 text-xs px-2 py-1 rounded-full mb-2 font-medium">
                  CÔNG NGHỆ
                </span>
                <h1 class="text-2xl md:text-3xl font-bold mb-2 leading-tight">
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
            <article class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-all duration-300 hover:-translate-y-1">
              <div class="relative">
                <img 
                  src="https://via.placeholder.com/300x200/ec4899/ffffff?text=iOS+26+Features" 
                  alt="Tổng hợp những tính năng mới trên iOS 26" 
                  class="w-full h-32 object-cover"
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
            <article class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-all duration-300 hover:-translate-y-1">
              <div class="relative">
                <img 
                  src="https://via.placeholder.com/300x200/10b981/ffffff?text=iOS+26+vs+iOS+18" 
                  alt="So sánh giao diện iOS 26 VS iOS 18" 
                  class="w-full h-32 object-cover"
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
                <p class="text-xs text-gray-600 mb-2 line-clamp-2">
                  Vào ngày 10/6/2025, Apple đã ra mắt iOS 26 và phiên bản phần mềm này mang lại nhiều thay đổi đáng chú ý về mặt giao diện so với iOS 18 (Apple gọi là thiết kế Liquid Glass)...
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
            <article class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-all duration-300 hover:-translate-y-1">
              <div class="relative">
                <img 
                  src="https://via.placeholder.com/300x200/f59e0b/ffffff?text=iOS+26+Beta+Guide" 
                  alt="Hướng dẫn cách nâng cấp lên iOS 26 beta" 
                  class="w-full h-32 object-cover"
                  loading="lazy"
                >
                <div class="absolute top-2 left-2">
                  <span class="bg-yellow-500 text-white text-xs px-2 py-1 rounded font-bold">GUIDE</span>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
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
          <article class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
            <div class="relative">
              <img 
                src="https://via.placeholder.com/800x300/6366f1/ffffff?text=WWDC+2025+Liquid+Glass" 
                alt="WWDC 25: Người dùng hào hức vì liquid glass đẹp" 
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
                <h2 class="text-xl md:text-2xl font-bold mb-2 leading-tight">
                  WWDC 25: Người dùng hào hức vì "liquid glass" đẹp, còn cả phố Wall thì vẫn lo ngay ngáy
                </h2>
                <p class="text-sm opacity-90 mb-3 line-clamp-2">
                  Cộng đồng công nghệ đang rất hào hứng với thiết kế mới Liquid Glass được giới thiệu tại WWDC 2025, trong khi các nhà đầu tư vẫn còn lo ngại về hiệu suất...
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
        </div>
  
        <!-- Sidebar -->
        <aside class="w-80 flex-shrink-0">
          <div class="bg-white rounded-lg shadow-sm p-4 sticky top-4">
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
          <div class="bg-white rounded-lg shadow-sm p-4 mt-4 sticky top-96">
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
        </aside>
      </div>
  
      <!-- Bottom Section -->
      <div class="max-w-7xl mx-auto p-4 mt-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
          <!-- Left Column - Gaming & Tech Articles -->
          <div class="space-y-4">
            <!-- ROG Gaming Article -->
            <article class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
              <div class="flex gap-4 p-4">
                <div class="flex-shrink-0">
                  <img 
                    src="https://via.placeholder.com/150x100/0f172a/ffffff?text=ROG+XBOX" 
                    alt="ASUS bắt tay Microsoft ra mắt ROG Xbox Ally và Ally X"
                    class="w-24 h-16 object-cover rounded"
                    loading="lazy"
                  >
                </div>
                <div class="flex-1">
                  <h3 class="font-semibold text-gray-900 mb-2 line-clamp-2">
                    ASUS bắt tay Microsoft ra mắt ROG Xbox Ally và Ally X: Định nghĩa lại máy chơi game cầm tay
                  </h3>
                  <p class="text-sm text-gray-600 mb-2 line-clamp-2">
                    Nhằm mục đích tái định nghĩa lại các thiết bị chơi game cầm tay chạy Windows, Xbox và ASUS ROG hợp tác để phát triển hai mẫu máy handheld PC là ROG Xbox Ally và Ally X...
                  </p>
                  <div class="flex items-center text-xs text-gray-500">
                    <div class="w-6 h-6 bg-indigo-600 rounded-full flex items-center justify-center mr-2">
                      <span class="text-xs font-bold text-white">P</span>
                    </div>
                    <span class="font-medium">Pnghuy</span>
                  </div>
                </div>
              </div>
            </article>
  
            <!-- Mercedes Article -->
            <article class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
              <div class="flex gap-4 p-4">
                <div class="flex-shrink-0">
                  <img 
                    src="https://via.placeholder.com/150x100/374151/ffffff?text=MERCEDES" 
                    alt="10 sự thật thú vị về thương hiệu 140 năm tuổi: MERCEDES-BENZ"
                    class="w-24 h-16 object-cover rounded"
                    loading="lazy"
                  >
                </div>
                <div class="flex-1">
                  <h3 class="font-semibold text-gray-900 mb-2 line-clamp-2">
                    10 sự thật thú vị về thương hiệu 140 năm tuổi: MERCEDES-BENZ
                  </h3>
                  <p class="text-sm text-gray-600 mb-2 line-clamp-2">
                    Kể từ năm 1895, khi chính thức đặt dấu ấn tại Việt Nam, ít ai hiểu đúng thương hiệu "ngôi sao ba cánh" không chỉ mang đến những chiếc xe sang trong mà còn góp phần định hình chuẩn mực kỹ thuật...
                  </p>
                  <div class="flex items-center text-xs text-gray-500">
                    <div class="w-6 h-6 bg-blue-600 rounded-full flex items-center justify-center mr-2">
                      <span class="text-xs font-bold text-white">T</span>
                    </div>
                    <span class="font-medium">Tienbantu</span>
                  </div>
                </div>
              </div>
            </article>
  
            <!-- Video Grid Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <!-- Porsche Video -->
              <article class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow relative">
                <div class="relative">
                  <img 
                    src="https://via.placeholder.com/300x200/991b1b/ffffff?text=PORSCHE+MACAN" 
                    alt="Trải nghiệm nhanh Porsche Macan 4 EV"
                    class="w-full h-32 object-cover"
                    loading="lazy"
                  >
                  <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                  <div class="absolute top-2 left-2">
                    <span class="bg-red-600 text-white text-xs px-2 py-1 rounded font-bold flex items-center">
                      📺 Xe TinHte
                    </span>
                  </div>
                  <div class="absolute bottom-2 left-2 right-2">
                    <h3 class="text-white text-sm font-semibold line-clamp-2">
                      Trải nghiệm nhanh Porsche Macan 4 EV: Vẫn là chiếc xe quá thiện vi người lái
                    </h3>
                  </div>
                </div>
              </article>
  
              <!-- Audio Equipment -->
              <article class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow relative">
                <div class="relative">
                  <img 
                    src="https://via.placeholder.com/300x200/7c2d12/ffffff?text=NOBLE+AUDIO" 
                    alt="Noble Audio ra mắt tai nghe inear Dante"
                    class="w-full h-32 object-cover"
                    loading="lazy"
                  >
                  <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                  <div class="absolute top-2 left-2">
                    <span class="bg-pink-600 text-white text-xs px-2 py-1 rounded font-bold flex items-center">
                      🎵 Audio TinHte
                    </span>
                  </div>
                  <div class="absolute bottom-2 left-2 right-2">
                    <h3 class="text-white text-sm font-semibold line-clamp-2">
                      Noble Audio ra mắt tai nghe inear Dante, cấu trúc driver tri-hybrid, giá $3500
                    </h3>
                  </div>
                </div>
              </article>
            </div>
  
            <!-- Additional Articles List -->
            <div class="bg-white rounded-lg shadow-sm p-4">
              <div class="space-y-3">
                <div v-for="article in additionalArticles" :key="article.id" class="text-sm">
                  <a href="#" class="text-blue-600 hover:text-blue-800 font-medium hover:underline">
                    {{ article.title }}
                  </a>
                </div>
                <div class="text-center pt-2">
                  <button class="text-blue-600 hover:text-blue-800 text-sm font-medium hover:underline">
                    Xem tất cả
                  </button>
                </div>
              </div>
            </div>
          </div>
  
          <!-- Right Column - Software & Tech Tips -->
          <div class="space-y-4">
            <!-- Software Tips Section -->
            <div class="bg-white rounded-lg shadow-sm p-4">
              <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-bold text-gray-900 flex items-center">
                  <span class="bg-blue-600 text-white p-1 rounded mr-2">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                  </span>
                  THỦ THUẬT TINHTE
                </h2>
                <button class="text-blue-600 text-sm hover:underline font-medium">
                  Xem tất cả ({{ softwareTips.length }})
                </button>
              </div>
              
              <div class="space-y-3">
                <div 
                  v-for="tip in softwareTips" 
                  :key="tip.id"
                  class="flex gap-3 hover:bg-gray-50 p-2 rounded-lg transition-colors cursor-pointer group"
                >
                  <div class="flex-shrink-0">
                    <img 
                      :src="tip.image" 
                      :alt="tip.title" 
                      class="w-16 h-12 object-cover rounded group-hover:scale-105 transition-transform"
                      loading="lazy"
                    >
                  </div>
                  <div class="flex-1 min-w-0">
                    <h3 class="text-sm font-medium text-gray-900 line-clamp-2 mb-1 group-hover:text-blue-600 transition-colors">
                      {{ tip.title }}
                    </h3>
                    <div class="text-xs text-gray-500">
                      {{ tip.category }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <!-- tvOS Article -->
            <article class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
              <div class="flex gap-4 p-4">
                <div class="flex-shrink-0">
                  <img 
                    src="https://via.placeholder.com/100x80/1f2937/ffffff?text=tvOS+26" 
                    alt="tvOS 26: Biến iPhone thành micro karaoke cho Apple TV"
                    class="w-20 h-16 object-cover rounded"
                    loading="lazy"
                  >
                </div>
                <div class="flex-1">
                  <h3 class="font-semibold text-gray-900 mb-2 line-clamp-2">
                    tvOS 26: Biến iPhone thành micro karaoke cho Apple TV
                  </h3>
                  <p class="text-sm text-gray-600 mb-2 line-clamp-2">
                    Trên phiên bản tvOS 26, Apple đã nâng cấp tính năng karaoke Apple Music Sing, cho phép người dùng biến iPhone thành micro không dây...
                  </p>
                  <div class="flex items-center text-xs text-gray-500">
                    <div class="w-6 h-6 bg-gray-600 rounded-full flex items-center justify-center mr-2">
                      <span class="text-xs font-bold text-white">A</span>
                    </div>
                    <span class="font-medium">Anh Tú</span>
                  </div>
                </div>
              </div>
            </article>
  
            <!-- Tags Section -->
            <div class="bg-white rounded-lg shadow-sm p-4">
              <h3 class="text-lg font-bold text-gray-900 mb-3">Tags trending</h3>
              <div class="flex flex-wrap gap-2">
                <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-sm font-medium cursor-pointer hover:bg-orange-200 transition-colors">
                  #macos
                </span>
                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium cursor-pointer hover:bg-green-200 transition-colors">
                  #android
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </template>
  
  <script lang="ts">
  import { defineComponent } from 'vue';
  
  interface QuickLink {
    title: string;
    image: string;
    source: string;
    time: string;
  }
  
  export default defineComponent({
    name: 'Article',
    data() {
      return {
        quickLinks: [
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
            title: 'Chuỗi những tin vỉ sẻt có thể là tác nhân tạo ra thành phần cơ bản của s...',
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
        ] as QuickLink[],
        popularTags: [
          'iOS26', 'WWDC2025', 'LiquidGlass', 'Apple', 'AI', 'Tech', 'Mobile', 'Security'
        ],
        additionalArticles: [
          { id: 1, title: 'Hình ảnh cầu thủ Nguyễn Xuân Sơn nhận xe Jaecoo J7 từ Omoda & Jaecoo Việt Nam' },
          { id: 2, title: 'All New BMW X3 2025 ra mắt thị trường Việt Nam' },
          { id: 3, title: 'All New BMW 5 Series G60 ra mắt thị trường Việt Nam, rất nhiều trang bị cao cấp xuất hiện' },
          { id: 4, title: 'Bang & Olufsen giới thiệu Beosystem 3000C: combo mâm và loa không dây cao cấp, giá $30,000' },
          { id: 5, title: 'Trên tay JBL Tour One M3 + Smart TX: pin tới 70 tiếng, Codec LDAC, LC3 cải thiện âm thanh Bluetooth' },
          { id: 6, title: 'Fender x MoFi Precision Deck: Mâm đĩa than giới hạn 1000 chiếc, giá $3495' }
        ],
        softwareTips: [
          {
            id: 1,
            title: 'App AiDente: Ứng dụng quản lý pin ngon và xịn trên macOS',
            image: 'https://via.placeholder.com/64x48/10b981/ffffff?text=AI',
            category: 'macOS'
          },
          {
            id: 2,
            title: 'App Blip: Truyền tải dữ liệu nhanh giữa iOS, Android, Windows, macOS',
            image: 'https://via.placeholder.com/64x48/3b82f6/ffffff?text=BLIP',
            category: 'Cross-Platform'
          },
          {
            id: 3,
            title: 'NotebookLM trên iPhone làm được gì?',
            image: 'https://via.placeholder.com/64x48/f59e0b/ffffff?text=NOTE',
            category: 'AI Tools'
          },
          {
            id: 4,
            title: 'Folder Preview: xem được nội dung file zip, thư mục mà không cần mở',
            image: 'https://via.placeholder.com/64x48/8b5cf6/ffffff?text=ZIP',
            category: 'Productivity'
          },
          {
            id: 5,
            title: 'Chỉ anh em xài trình duyệt Focus trên iPhone, rất tiện',
            image: 'https://via.placeholder.com/64x48/ef4444/ffffff?text=FOCUS',
            category: 'iOS'
          },
          {
            id: 6,
            title: 'Cách tắt thông báo cuộc gọi iPhone, FaceTime trên iPad và Mac',
            image: 'https://via.placeholder.com/64x48/06b6d4/ffffff?text=CALL',
            category: 'iOS Tips'
          },
          {
            id: 7,
            title: 'Hướng dẫn prompt tự cơ bản đến nâng cao P3: step-back prompting',
            image: 'https://via.placeholder.com/64x48/ec4899/ffffff?text=AI',
            category: 'AI Prompting'
          },
          {
            id: 8,
            title: '5 lảm tương phổ biến trong việc sạc pin điện thoại, máy tính bảng',
            image: 'https://via.placeholder.com/64x48/84cc16/ffffff?text=BATTERY',
            category: 'Hardware Tips'
          },
          {
            id: 9,
            title: 'Cách kiểm tra ứng dụng hiếu hao pin nhiều trên Windows 11',
            image: 'https://via.placeholder.com/64x48/6366f1/ffffff?text=WIN11',
            category: 'Windows'
          },
          {
            id: 10,
            title: 'Windows Command Palette: Công cụ tìm kiếm mạnh mẽ trên Windows 11',
            image: 'https://via.placeholder.com/64x48/0f172a/ffffff?text=CMD',
            category: 'Windows 11'
          }
        ]
      };
    },
    methods: {
      formatDate(date: Date): string {
        return new Intl.DateTimeFormat('vi-VN', {
          day: '2-digit',
          month: '2-digit',
          year: 'numeric'
        }).format(date);
      }
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