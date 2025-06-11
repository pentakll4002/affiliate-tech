<template>
    <div class="min-h-screen bg-gray-50">
      <div class="container mx-auto px-4 py-6">
        <div class="flex gap-6">
          <!-- Left Sidebar -->
          <div class="w-80 flex-shrink-0">
            <!-- Community Header -->
            <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
              <div class="flex items-center gap-4 mb-4">
                <div class="bg-blue-500 text-white p-3 rounded-lg">
                  <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                  </svg>
                </div>
                <div>
                  <h1 class="text-xl font-bold text-gray-900">THỦ THUẬT</h1>
                  <p class="text-sm text-gray-500">Tinhte</p>
                </div>
              </div>
              <p class="text-gray-600 mb-4">Cộng đồng</p>
              <h2 class="text-2xl font-bold text-gray-900">Thủ thuật</h2>
            </div>
  
            <!-- Stats -->
            <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
              <div class="space-y-4">
                <div class="flex items-center gap-3">
                  <div class="w-6 h-6 bg-blue-100 rounded flex items-center justify-center">
                    <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                      <path fill-rule="evenodd" d="M4 5a2 2 0 012-2v1a1 1 0 001 1h6a1 1 0 001-1V3a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/>
                    </svg>
                  </div>
                  <div>
                    <p class="text-sm text-gray-600">Thảo luận</p>
                    <p class="font-semibold">2.679 bài</p>
                  </div>
                </div>
                
                <div class="flex items-center gap-3">
                  <div class="w-6 h-6 bg-cyan-100 rounded flex items-center justify-center">
                    <svg class="w-4 h-4 text-cyan-600" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                    </svg>
                  </div>
                  <div>
                    <p class="text-sm text-gray-600">Trung bình</p>
                    <p class="font-semibold">2 bài/ ngày</p>
                  </div>
                </div>
                
                <div class="flex items-center gap-3">
                  <div class="w-6 h-6 bg-green-100 rounded flex items-center justify-center">
                    <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                    </svg>
                  </div>
                  <div>
                    <p class="text-sm text-gray-600">Theo dõi bởi</p>
                    <p class="font-semibold">4.065 thành viên</p>
                  </div>
                </div>
              </div>
            </div>
  
            <!-- Related Communities -->
            <div class="bg-white rounded-lg shadow-sm p-6">
              <h3 class="font-semibold text-gray-900 mb-4">Cộng đồng</h3>
              <div class="space-y-3">
                <div class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-50 cursor-pointer">
                  <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center">
                    <span class="text-white text-sm font-bold">AI</span>
                  </div>
                  <div>
                    <p class="font-medium text-sm">Vinalink AI Trainer</p>
                  </div>
                </div>
                
                <div class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-50 cursor-pointer">
                  <div class="w-12 h-12 bg-orange-500 rounded-lg flex items-center justify-center">
                    <span class="text-white text-xs font-bold">BAC</span>
                  </div>
                  <div>
                    <p class="font-medium text-sm">BAC Training</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <!-- Main Content -->
          <div class="flex-1">
            <!-- Action Bar -->
            <div class="bg-white rounded-lg shadow-sm p-4 mb-6">
              <div class="flex items-center justify-between mb-4">
                <button class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg font-medium flex items-center gap-2">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"/>
                  </svg>
                  Đăng ký theo dõi
                </button>
                
                <div class="flex gap-4">
                  <button class="flex items-center gap-2 text-gray-600 hover:text-gray-900">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 6.707 6.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                  </svg>
                    Ghim
                  </button>
                  
                  <button class="flex items-center gap-2 text-gray-600 hover:text-gray-900">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                    </svg>
                    Chia sẻ
                  </button>
                </div>
              </div>
  
              <!-- Tabs -->
              <div class="flex border-b">
                <button 
                  v-for="tab in tabs" 
                  :key="tab.id"
                  @click="activeTab = tab.id"
                  :class="[
                    'px-6 py-3 font-medium border-b-2 transition-colors',
                    activeTab === tab.id 
                      ? 'text-blue-600 border-blue-600' 
                      : 'text-gray-500 border-transparent hover:text-gray-700'
                  ]"
                >
                  {{ tab.name }}
                </button>
              </div>
            </div>
  
            <!-- Post Creation -->
            <div class="bg-white rounded-lg shadow-sm p-4 mb-6">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-gray-300 rounded-full"></div>
                <button class="flex-1 bg-gray-100 hover:bg-gray-200 text-left px-4 py-3 rounded-full text-gray-600">
                  + Tạo Bài Viết
                </button>
                <button class="p-2 text-gray-400 hover:text-gray-600">
                  <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                  </svg>
                </button>
                <button class="p-2 text-gray-400 hover:text-gray-600">
                  <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd"/>
                  </svg>
                </button>
              </div>
            </div>
  
            <!-- Post -->
            <div class="bg-white rounded-lg shadow-sm mb-6">
              <!-- Post Header -->
              <div class="p-6 border-b">
                <div class="flex items-center gap-3 mb-4">
                  <div class="w-10 h-10 bg-gray-300 rounded-full"></div>
                  <div>
                    <div class="flex items-center gap-2">
                      <span class="font-semibold">Anh Tú</span>
                      <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                      </svg>
                    </div>
                    <p class="text-sm text-gray-500">7h</p>
                  </div>
                  <div class="ml-auto">
                    <button class="p-2 text-gray-400 hover:text-gray-600">
                      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"/>
                      </svg>
                    </button>
                  </div>
                </div>
  
                <!-- Post Content -->
                <div class="bg-gray-800 text-white rounded-lg p-4 mb-4">
                  <div class="mb-4">
                    <div class="flex gap-4 mb-4">
                      <div class="bg-white rounded-lg p-4 flex-1">
                        <div class="bg-gray-100 h-32 rounded mb-2"></div>
                        <div class="space-y-2">
                          <div class="w-3/4 h-3 bg-red-200 rounded"></div>
                          <div class="w-full h-2 bg-gray-200 rounded"></div>
                          <div class="w-2/3 h-2 bg-gray-200 rounded"></div>
                        </div>
                      </div>
                      
                      <div class="bg-white rounded-lg p-4 flex-1">
                        <div class="bg-gray-100 h-32 rounded mb-2"></div>
                        <div class="space-y-2">
                          <div class="w-3/4 h-3 bg-blue-200 rounded"></div>
                          <div class="w-full h-2 bg-gray-200 rounded"></div>
                          <div class="w-2/3 h-2 bg-gray-200 rounded"></div>
                        </div>
                      </div>
                      
                      <div class="bg-white rounded-lg p-4 flex-1">
                        <div class="bg-gray-100 h-32 rounded mb-2"></div>
                        <div class="space-y-2">
                          <div class="w-3/4 h-3 bg-red-200 rounded"></div>
                          <div class="w-full h-2 bg-gray-200 rounded"></div>
                          <div class="w-2/3 h-2 bg-gray-200 rounded"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <p class="text-sm leading-relaxed">
                    <strong>Vào cài đặt → Chọn Trợ năng → Chọn Màn hình & cỡ chữ → Chọn Giảm độ trong suốt</strong>
                  </p>
                  
                  <p class="text-sm leading-relaxed mt-3">
                    Vậy là xong, nhưng mà nói thêt anh em không nên làm hành động đó vì iOS 26 đẹp là ở 
                    cái hiệu ứng trong suốt, update xong giờ tất dì vậy thì update làm gì hihi. Anh em có thể 
                    xem thêm nhiều bài về iOS 26 dưới đây để có thêm thông tin rõi quyết định có update 
                    hay không nha.
                  </p>
                </div>
              </div>
  
              <!-- Post Actions -->
              <div class="px-6 py-3 border-b">
                <div class="flex items-center justify-between">
                  <div class="flex items-center gap-6 text-sm text-gray-500">
                    <span class="flex items-center gap-1">
                      <svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"/>
                      </svg>
                      4
                    </span>
                    <span class="flex items-center gap-1">
                      <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"/>
                      </svg>
                      2
                    </span>
                    <span class="flex items-center gap-1">
                      <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M18 9.5a1.5 1.5 0 11-3 0v-6a1.5 1.5 0 013 0v6zM14 9.667v-5.43a2 2 0 00-1.106-1.79l-.05-.025A4 4 0 0011.057 2H5.64a2 2 0 00-1.962 1.608l-1.2 6A2 2 0 004.44 12H8v4a2 2 0 002 2 1 1 0 001-1v-.667a4 4 0 01.8-2.4l1.4-1.866a4 4 0 00.8-2.4z"/>
                      </svg>
                      1
                    </span>
                  </div>
                  <span class="text-sm text-gray-500">22 bình luận</span>
                </div>
              </div>
  
              <!-- Action Buttons -->
              <div class="px-6 py-3 border-b">
                <div class="flex justify-between">
                  <button class="flex items-center gap-2 text-gray-600 hover:text-blue-600 py-2 px-4 rounded-lg hover:bg-blue-50">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"/>
                    </svg>
                  </button>
                  
                  <button class="flex items-center gap-2 text-gray-600 hover:text-red-600 py-2 px-4 rounded-lg hover:bg-red-50">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M18 9.5a1.5 1.5 0 11-3 0v-6a1.5 1.5 0 013 0v6zM14 9.667v-5.43a2 2 0 00-1.106-1.79l-.05-.025A4 4 0 0011.057 2H5.64a2 2 0 00-1.962 1.608l-1.2 6A2 2 0 004.44 12H8v4a2 2 0 002 2 1 1 0 001-1v-.667a4 4 0 01.8-2.4l1.4-1.866a4 4 0 00.8-2.4z"/>
                    </svg>
                  </button>
                  
                  <button class="flex items-center gap-2 text-gray-600 hover:text-green-600 py-2 px-4 rounded-lg hover:bg-green-50">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"/>
                    </svg>
                  </button>
                  
                  <button class="flex items-center gap-2 text-gray-600 hover:text-blue-600 py-2 px-4 rounded-lg hover:bg-blue-50">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z"/>
                    </svg>
                  </button>
                </div>
              </div>
  
              <!-- Comments Section -->
              <div class="p-6">
                <!-- Comment Input -->
                <div class="flex gap-3 mb-6">
                  <div class="w-8 h-8 bg-gray-300 rounded-full flex-shrink-0"></div>
                  <div class="flex-1">
                    <input 
                      type="text" 
                      placeholder="Đang nhập một phát, tha hồ bình luận (^ 3^)" 
                      class="w-full px-4 py-2 border border-gray-200 rounded-full bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    />
                  </div>
                </div>
  
                <!-- Comments -->
                <div class="space-y-4">
                  <div class="flex gap-3">
                    <div class="w-8 h-8 bg-red-500 rounded-full flex-shrink-0"></div>
                    <div class="flex-1">
                      <div class="flex items-center gap-2 mb-1">
                        <span class="font-medium text-sm">i swing</span>
                        <span class="text-xs text-orange-500 bg-orange-100 px-2 py-0.5 rounded">GA</span>
                        <span class="text-xs text-gray-500">3h</span>
                      </div>
                      <p class="text-sm text-gray-800">Hết sáng tạo rồi, về ra mấy thứ màu mè cho trẻ rạnh nó mê, điện thoại là thằng ad</p>
                      <div class="flex items-center gap-4 mt-2">
                        <button class="text-xs text-gray-500 hover:text-blue-600 flex items-center gap-1">
                          <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"/>
                          </svg>
                          1
                        </button>
                      </div>
                    </div>
                  </div>
  
                  <div class="flex gap-3">
                    <div class="w-8 h-8 bg-gray-400 rounded-full flex-shrink-0"></div>
                    <div class="flex-1">
                      <div class="flex items-center gap-2 mb-1">
                        <span class="font-medium text-sm">Hondacodon287</span>
                        <span class="text-xs text-orange-500 bg-orange-100 px-2 py-0.5 rounded">GA</span>
                        <span class="text-xs text-gray-500">5h</span>
                      </div>
                      <p class="text-sm text-gray-800">Có đâm ăn xôi à Tú. Tù sài cái giao diện mặc định mãi à sẽ ko bao giờ Rep vào bài chủ nữa. Chú má chán rồi táp bỏ nó thi xin chủ tử h miên việt bài cho Tinh tế Đót zậc. Cài giao diện như cũ lại vậy má kêu đẹp cũng đến lày. nó chỉ gọi là mới.là thị trải nghiệm thôi con được.</p>
                      <div class="mt-2">
                        <button class="text-xs text-blue-600 hover:underline">Xem thêm bình luận...</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script setup lang="ts">
  import { ref } from 'vue'
  
  const activeTab = ref('discussion')
  
  const tabs = [
    { id: 'discussion', name: 'Thảo luận' },
    { id: 'tips', name: 'Mẹo & Tin' },
    { id: 'guide', name: 'Hướng dẫn' }
  ]
  </script>