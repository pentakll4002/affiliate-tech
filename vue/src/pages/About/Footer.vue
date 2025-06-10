<template>
  <footer class="bg-white text-gray-700 border-t mt-10">
    <div class="max-w-7xl mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-4 gap-8 font-sans">
      <!-- Cột 1 -->
      <div>
        <h3 class="font-bold text-lg mb-  3">Mọt Tech</h3>
        <ul class="space-y-1">
          <li v-for="(item, i) in forumLinks" :key="i">
            <a
              :href="item.link"
              class="inline-block hover:text-orange-500 hover:underline hover:scale-105 transform transition duration-150"
            >
              {{ item.text }}
            </a>
          </li>
        </ul>
      </div>

      <!-- Cột 2 -->
      <div>
        <h3 class="font-bold text-lg mb-3">Công nghệ</h3>
        <ul class="space-y-1">
          <li v-for="(item, i) in communityLinks" :key="i">
            <a
              :href="item.link"
              class="inline-block hover:text-orange-500 hover:underline hover:scale-105 transform transition duration-150"
            >
              {{ item.text }}
            </a>
          </li>
        </ul>
      </div>

      <!-- Cột 3 -->
      <div>
        <h3 class="font-bold text-lg mb-3">Chợ tốt - Nhật Tảo</h3>
        <ul class="space-y-1">
          <li v-for="(item, i) in marketLinks" :key="i">
            <a
              :href="item.link"
              class="inline-block hover:text-orange-500 hover:underline hover:scale-105 transform transition duration-150"
            >
              {{ item.text }}
            </a>
          </li>
        </ul>
      </div>

      <!-- Cột 4 -->
      <div>
        <h3 class="font-bold text-lg mb-3">Theo dõi chúng tôi</h3>
        <div class="flex space-x-4 mb-3">
          <a
            v-for="(social, i) in socialLinks"
            :key="i"
            :href="social.link"
            :class="`${social.color} inline-block hover:scale-110 transform transition duration-150`"
          >
            <font-awesome-icon :icon="social.icon" class="text-2xl" />
          </a>
        </div>
        <p class="text-xs">Chịu trách nhiệm nội dung: Đặng Thiên Ân</p>
      </div>
    </div>

    <div class="bg-gray-100 py-4 text-center text-xs text-gray-500">
      © 2025 Công ty Cổ phần MXH Mọt Tech | Địa chỉ: Số 70 Bà Huyện Thanh Quan, P. Võ Thị Sáu, Quận 3, TPHCM |
      Số điện thoại: 0982685374 | MST: 0313255119<br />
      Giấy phép thiết lập MXH số 11/GP-BTTTT, Ký ngày: 10/06/2025
    </div>
  </footer>
</template>

<script setup>
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faFacebookF, faYoutube, faTwitter, faFlickr } from '@fortawesome/free-brands-svg-icons'

const forumLinks = [
  { text: 'Nội quy diễn đàn', link: '#' },
  { text: 'Thỏa thuận sử dụng dịch vụ', link: '#' },
  { text: 'Góp ý', link: '#' },
  { text: 'Hỗ trợ, hướng dẫn', link: '#' },
  { text: 'Liên hệ quảng cáo', link: '#' },
]

const communityLinks = [
  { text: 'Điện thoại', link: '#' },
  { text: 'Máy tính', link: '#' },
  { text: 'Camera', link: '#' },
  { text: 'Xe', link: '#' },
  { text: 'Khoa học công nghệ', link: '#' }
]

const marketLinks = [
  { text: 'Mua bán điện thoại', link: '#' },
  { text: 'Mua bán máy tính', link: '#' },
  { text: 'Mua bán máy tính bảng', link: '#' },
  { text: 'Mua bán camera', link: '#' },
  { text: 'Mua bán đồng hồ thông minh', link: '#' },
  { text: 'Mua bán xe', link: '#' },
  { text: 'Mua bán điện máy', link: '#' },
  { text: 'Mua bán sim, sim 3G', link: '#' }
]

const socialLinks = [
  { icon: faFacebookF, link: '#', color: 'text-blue-600' },
  { icon: faYoutube, link: '#', color: 'text-red-600' },
  { icon: faTwitter, link: '#', color: 'text-blue-400' },
  { icon: faFlickr, link: '#', color: 'text-pink-600' }
]
</script>

<style scoped>
a {
  transition: all 0.2s;
}
</style>
