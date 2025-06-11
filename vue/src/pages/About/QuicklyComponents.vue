<template>
    <div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50">
      <!-- Header -->
      <header class="sticky top-0 z-50 backdrop-blur-xl bg-white/80 border-b border-slate-200/60 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex items-center justify-between h-16">
            <div class="flex items-center space-x-4">
              <div class="flex items-center space-x-2">
                <div class="w-8 h-8 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                  <span class="text-white font-bold text-sm">QuicklyPage</span>
                </div>
                <h1 class="text-xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                  QuicklyPage
                </h1>
              </div>
            </div>
            
            <nav class="hidden md:flex items-center space-x-8">
              <a href="#" class="text-slate-600 hover:text-blue-600 font-medium transition-colors duration-200">Trang chủ</a>
              <a href="#" class="text-slate-600 hover:text-blue-600 font-medium transition-colors duration-200">Reviews</a>
              <a href="#" class="text-slate-600 hover:text-blue-600 font-medium transition-colors duration-200">Tin tức</a>
              <a href="#" class="text-slate-600 hover:text-blue-600 font-medium transition-colors duration-200">Thảo luận</a>
            </nav>
  
            <div class="flex items-center space-x-4">
              <button class="p-2 text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
              </button>
              <button class="p-2 text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 9h6v6H9z"/>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </header>
  
      <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
          <!-- Main Content -->
          <div class="lg:col-span-3 space-y-8">
            <!-- Featured Section -->
            <section>
              <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-slate-800 flex items-center">
                  <span class="w-1 h-8 bg-gradient-to-b from-blue-500 to-purple-500 rounded-full mr-3"></span>
                  Chuyện trang xem nhanh
                </h2>
                <button class="text-blue-600 hover:text-blue-700 font-medium text-sm flex items-center space-x-1 transition-colors">
                  <span>Xem tất cả</span>
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                  </svg>
                </button>
              </div>
  
              <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                <article 
                  v-for="(article, index) in featuredArticles" 
                  :key="index"
                  class="group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden border border-slate-100 hover:border-blue-200"
                >
                  <div class="aspect-video bg-gradient-to-br from-blue-100 to-purple-100 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    <div class="absolute bottom-3 left-3 right-3">
                      <div class="flex items-center justify-between">
                        <span class="px-3 py-1 bg-white/90 backdrop-blur-sm rounded-full text-xs font-medium text-slate-700">
                          {{ article.category }}
                        </span>
                        <span class="text-white/90 text-xs">{{ article.readTime }}</span>
                      </div>
                    </div>
                  </div>
                  
                  <div class="p-6">
                    <h3 class="font-bold text-slate-800 mb-3 group-hover:text-blue-600 transition-colors duration-200 line-clamp-2">
                      {{ article.title }}
                    </h3>
                    
                    <div class="flex items-center justify-between text-sm text-slate-500">
                      <div class="flex items-center space-x-2">
                        <div class="w-6 h-6 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center">
                          <span class="text-white text-xs font-bold">{{ article.author.charAt(0) }}</span>
                        </div>
                        <span>{{ article.author }}</span>
                      </div>
                      <span>{{ article.time }}</span>
                    </div>
                  </div>
                </article>
              </div>
            </section>
  
            <!-- News Articles -->
            <section>
              <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-slate-800 flex items-center">
                  <span class="w-1 h-8 bg-gradient-to-b from-green-500 to-emerald-500 rounded-full mr-3"></span>
                  Tin tức mới nhất
                </h2>
              </div>
  
              <div class="space-y-6">
                <article 
                  v-for="(news, index) in newsArticles" 
                  :key="index"
                  class="group bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden border border-slate-100 hover:border-green-200"
                >
                  <div class="md:flex">
                    <div class="md:w-48 aspect-video md:aspect-square bg-gradient-to-br from-green-100 to-emerald-100 relative overflow-hidden">
                      <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent"></div>
                    </div>
                    
                    <div class="flex-1 p-6">
                      <div class="flex items-center space-x-2 mb-3">
                        <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium">
                          {{ news.category }}
                        </span>
                        <span class="text-slate-400 text-xs">•</span>
                        <span class="text-slate-500 text-sm">{{ news.time }}</span>
                      </div>
                      
                      <h3 class="font-bold text-slate-800 mb-3 group-hover:text-green-600 transition-colors duration-200 text-lg">
                        {{ news.title }}
                      </h3>
                      
                      <p class="text-slate-600 mb-4 line-clamp-2">
                        {{ news.excerpt }}
                      </p>
                      
                      <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                          <div class="w-8 h-8 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center">
                            <span class="text-white text-xs font-bold">{{ news.author.charAt(0) }}</span>
                          </div>
                          <span class="text-slate-600 font-medium">{{ news.author }}</span>
                        </div>
                        
                        <div class="flex items-center space-x-4 text-slate-400">
                          <span class="flex items-center space-x-1 text-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                            <span>{{ news.views }}</span>
                          </span>
                          <span class="flex items-center space-x-1 text-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                            <span>{{ news.comments }}</span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </section>
          </div>
  
          <!-- Sidebar -->
          <aside class="lg:col-span-1 space-y-8">
            <!-- Community Section -->
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
              <div class="p-6 border-b border-slate-100">
                <h3 class="font-bold text-slate-800 flex items-center">
                  <span class="w-1 h-6 bg-gradient-to-b from-purple-500 to-pink-500 rounded-full mr-2"></span>
                  Cộng đồng
                </h3>
              </div>
              
              <div class="p-6 space-y-4">
                <div 
                  v-for="(community, index) in communities" 
                  :key="index"
                  class="group flex items-center space-x-3 p-3 rounded-xl hover:bg-slate-50 transition-all duration-200 cursor-pointer"
                >
                  <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center">
                    <span class="text-white font-bold">{{ community.icon }}</span>
                  </div>
                  <div class="flex-1">
                    <h4 class="font-semibold text-slate-700 group-hover:text-purple-600 transition-colors">
                      {{ community.name }}
                    </h4>
                    <p class="text-slate-500 text-sm">{{ community.description }}</p>
                  </div>
                </div>
              </div>
            </div>
  
            <!-- Tags Section -->
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
              <div class="p-6 border-b border-slate-100">
                <h3 class="font-bold text-slate-800 flex items-center">
                  <span class="w-1 h-6 bg-gradient-to-b from-orange-500 to-red-500 rounded-full mr-2"></span>
                  #TAG ĐANG HOT
                </h3>
              </div>
              
              <div class="p-6">
                <div class="flex flex-wrap gap-2">
                  <span 
                    v-for="(tag, index) in hotTags" 
                    :key="index"
                    class="px-3 py-1 bg-gradient-to-r from-orange-100 to-red-100 text-orange-700 rounded-full text-sm font-medium hover:from-orange-200 hover:to-red-200 transition-all duration-200 cursor-pointer"
                  >
                    #{{ tag }}
                  </span>
                </div>
              </div>
            </div>
  
            <!-- Quick Stats -->
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
              <div class="p-6">
                <h3 class="font-bold text-slate-800 mb-4 flex items-center">
                  <span class="w-1 h-6 bg-gradient-to-b from-blue-500 to-cyan-500 rounded-full mr-2"></span>
                  Thống kê nhanh
                </h3>
                
                <div class="space-y-4">
                  <div class="flex items-center justify-between">
                    <span class="text-slate-600">Bài viết hôm nay</span>
                    <span class="font-bold text-blue-600">127</span>
                  </div>
                  <div class="flex items-center justify-between">
                    <span class="text-slate-600">Thành viên online</span>
                    <span class="font-bold text-green-600">1,542</span>
                  </div>
                  <div class="flex items-center justify-between">
                    <span class="text-slate-600">Thảo luận mới</span>
                    <span class="font-bold text-purple-600">89</span>
                  </div>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </main>
    </div>
  </template>
  
  <script setup lang="ts">
  import { ref, reactive } from 'vue'
  
  interface Article {
    title: string
    author: string
    time: string
    category: string
    readTime: string
  }
  
  interface NewsArticle {
    title: string
    excerpt: string
    author: string
    time: string
    category: string
    views: string
    comments: string
  }
  
  interface Community {
    name: string
    description: string
    icon: string
  }
  
  const featuredArticles = reactive<Article[]>([
    {
      title: "Android 16 chính thức có cho các máy Pixel",
      author: "Didu",
      time: "2 giờ trước",
      category: "Android",
      readTime: "3 phút đọc"
    },
    {
      title: "Đừng cập nhật lên iOS 26 hiện tại!",
      author: "zyzy1908",
      time: "23 giờ trước",
      category: "iOS",
      readTime: "5 phút đọc"
    },
    {
      title: "Chi tiết Nikon Z8 firmware 3.0: Nâng cấp toàn diện cho chiếc máy hybrid flagship",
      author: "P.W",
      time: "1 ngày trước",
      category: "Camera",
      readTime: "7 phút đọc"
    },
    {
      title: "Mời anh em vào fanpage Tinhte coi livestream giải đáp thắc mắc về iOS 26, macOS 26",
      author: "Anh Tú",
      time: "4 giờ trước",
      category: "Live",
      readTime: "2 phút đọc"
    },
    {
      title: "Chi tiết hơn về hiệu ứng Liquid Glass, xem ra hiệu ứng cũng khá phức tạp chứ không đơn giản",
      author: "Anh Tú",
      time: "6 giờ trước",
      category: "Design",
      readTime: "4 phút đọc"
    }
  ])
  
  const newsArticles = reactive<NewsArticle[]>([
    {
      title: "Lỗ hổng bảo mật có thể khiến số điện thoại liên kết với tài khoản Google của anh em bị lộ",
      excerpt: "Lỗ hổng bảo mật có thể khiến số điện thoại liên kết với tài khoản Google của anh em bị lộ. Gần đây, một chuyên gia bảo mật đã phát hiện ra một lỗ hổng nghiêm trọng trong hệ thống bảo mật của Google...",
      author: "nhatminhng",
      time: "1 giờ trước",
      category: "Bảo mật",
      views: "2.5K",
      comments: "47"
    },
    {
      title: "Giỏ chơi xịu với iOS mới mà vợ gián luôn. Tim Cook hại minh rồi...",
      excerpt: "Giỏ chơi xịu với iOS mới mà vợ gián luôn. Tim Cook hại minh rồi... Tính năng mới trong iOS khiến nhiều người gặp khó khăn trong việc sử dụng hàng ngày.",
      author: "cuhiep",
      time: "3 giờ trước",
      category: "iOS",
      views: "1.8K",
      comments: "89"
    },
    {
      title: "Vật liệu từ những con tàu đắm trong Thế chiến thứ 2 lại lỗi giải cho bức xạ nền trong các thi...",
      excerpt: "Vật liệu từ những con tàu đắm trong Thế chiến thứ 2 lại lỗi giải cho bức xạ nền trong các thí nghiệm vật lý hạt nhân. Các nhà khoa học đã phát hiện ra một ứng dụng bất ngờ của kim loại từ những con tàu cổ.",
      author: "nhatminhng",
      time: "5 giờ trước",
      category: "Khoa học",
      views: "3.2K",
      comments: "156"
    },
    {
      title: "Các nhà khoa học đang phát triển một thế hệ trí tuệ nhân tạo (AI) hoàn toàn mới, lấy cảm hứng từ...",
      excerpt: "Các nhà khoa học đang phát triển một thế hệ trí tuệ nhân tạo (AI) hoàn toàn mới, lấy cảm hứng từ chính bộ não con người! Loại AI này được gọi là 'AI mô phỏng sinh học' (biomimetic AI), nghĩa là nó có gắng bắt chước cách mà các tế bào thần kinh...",
      author: "nhatminhng",
      time: "8 giờ trước",
      category: "AI",
      views: "4.1K",
      comments: "203"
    },
    {
      title: "Sam Altman: Mỗi truy vấn ChatGPT sẽ sử dụng lượng nước tương đương 'một phần mười lăm thìa cafe'",
      excerpt: "Sam Altman: Mỗi truy vấn ChatGPT sẽ sử dụng lượng nước tương đương 'một phần mười lăm thìa cafe'. Sam Altman, CEO của OpenAI, vừa chia sẻ rằng mỗi truy vấn ChatGPT trong tương lai có thể tiêu thụ lượng nước 'không một phần mười lăm thìa cà phê'...",
      author: "techreporter",
      time: "12 giờ trước",
      category: "AI",
      views: "5.7K",
      comments: "334"
    }
  ])
  
  const communities = reactive<Community[]>([
    {
      name: "Vinalink AI Trainer",
      description: "Khóa học AI Trainer",
      icon: "🤖"
    },
    {
      name: "BAC Training",
      description: "Đào tạo công nghệ",
      icon: "📚"
    },
    {
      name: "BuffSEO",
      description: "SEO Marketing",
      icon: "🚀"
    },
    {
      name: "Tinh tế AI",
      description: "AI Community",
      icon: "🧠"
    }
  ])
  
  const hotTags = ref<string[]>([
    'android', 'windows', 'ios', 'ai', 'samsung', 'apple', 'google', 'microsoft', 'tesla', 'meta'
  ])
  </script>
  
  <style scoped>
  .line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
  </style>