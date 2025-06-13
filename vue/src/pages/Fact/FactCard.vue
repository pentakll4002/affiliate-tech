<template>
  <div class="group relative">
    <!-- Subtle Shadow Effect -->
    <div class="absolute -inset-1 bg-gradient-to-r from-blue-200 via-indigo-200 to-slate-200 rounded-3xl opacity-0 group-hover:opacity-50 blur transition-all duration-500"></div>
    
    <!-- Main Card -->
    <div class="relative w-full aspect-[2.5/4] rounded-2xl overflow-hidden bg-white transform transition-all duration-500 hover:scale-105 cursor-pointer shadow-lg hover:shadow-xl border border-gray-100">
      <!-- Image Container -->
      <div class="relative w-full h-full overflow-hidden">
        <img 
          :src="image" 
          class="w-full h-full object-cover transition-all duration-700 group-hover:scale-110" 
          :alt="username"
        />
        
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent opacity-60 group-hover:opacity-40 transition-opacity duration-300"></div>
        
        <!-- Subtle Shimmer Effect -->
        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000 ease-in-out"></div>
      </div>

      <!-- Avatar -->
      <div class="absolute top-4 left-4">
        <div class="relative">
          <div class="absolute -inset-1 bg-gradient-to-r from-blue-400 to-indigo-500 rounded-full opacity-75 group-hover:opacity-100 transition-opacity duration-300"></div>
          <img 
            :src="avatar" 
            class="relative w-10 h-10 rounded-full border-2 border-white shadow-lg transition-all duration-300 group-hover:scale-110 object-cover"
            :alt="username"
          />
        </div>
      </div>

      <!-- Action Buttons -->
      <div class="absolute top-4 right-4 flex flex-col space-y-2 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
        <!-- Like Button -->
        <div class="w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center hover:scale-110 transition-transform duration-200 shadow-lg">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
          </svg>
        </div>
        
        <!-- Share Button -->
        <div class="w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center hover:scale-110 transition-transform duration-200 shadow-lg">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z" />
          </svg>
        </div>
      </div>

      <!-- Username and Stats -->
      <div class="absolute bottom-0 left-0 right-0 p-4">
        <div class="flex items-center justify-between">
          <div class="flex-1">
            <p class="text-white font-semibold text-sm mb-1 drop-shadow-lg truncate">{{ username }}</p>
            <div class="flex items-center space-x-3 text-white/80 text-xs">
              <span class="flex items-center space-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                </svg>
                <span>{{ Math.floor(Math.random() * 999) + 1 }}</span>
              </span>
              <span class="flex items-center space-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
                <span>{{ Math.floor(Math.random() * 9999) + 100 }}</span>
              </span>
            </div>
          </div>
          
          <!-- Status Indicator -->
          <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse shadow-lg"></div>
        </div>
      </div>

      <!-- Subtle Floating Dots -->
      <div class="absolute top-6 right-12 w-1 h-1 bg-white/40 rounded-full animate-ping"></div>
      <div class="absolute top-12 right-8 w-1 h-1 bg-blue-400/40 rounded-full animate-ping delay-300"></div>
      <div class="absolute top-8 right-16 w-1 h-1 bg-indigo-400/40 rounded-full animate-ping delay-700"></div>
    </div>
  </div>
</template>

<script setup>
defineProps(['image', 'avatar', 'username'])
</script>