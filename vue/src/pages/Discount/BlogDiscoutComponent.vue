<template>
  <div class="max-w-3xl mx-auto mt-6 p-6 bg-gray-50 min-h-screen font-sans">
    <!-- Title -->
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Danh sách mã</h1>

    <!-- Platform Filter -->
    <div class="mb-8">
      <h2 class="text-xl font-semibold text-gray-700 mb-4 flex items-center gap-2">
        <FilterIcon class="w-5 h-5 text-gray-500" />
        Lọc theo Sàn
      </h2>
      <div class="flex flex-wrap gap-4">
        <button v-for="platform in platforms" :key="platform.name"
                class="flex items-center gap-2 px-4 py-2 bg-white rounded-lg shadow-sm hover:shadow-md transition-all duration-200">
          <component :is="platform.icon" class="w-5 h-5" :class="platform.iconColor" />
          <span class="font-medium text-gray-700">{{ platform.name }}</span>
        </button>
      </div>
    </div>

    <!-- Create New Fact Form -->
    <div class="mb-8 p-6 bg-white rounded-lg shadow-md">
      <h2 class="text-xl font-semibold text-gray-700 mb-4">Create New Fact</h2>
      <form @submit.prevent="createFact">
        <div class="mb-4">
          <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image URL:</label>
          <input type="url" id="image" v-model="newFact.image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
          <label for="avatar" class="block text-gray-700 text-sm font-bold mb-2">Avatar URL:</label>
          <input type="url" id="avatar" v-model="newFact.avatar" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
          Create Fact
        </button>
      </form>
      <p v-if="successMessage" class="text-green-500 mt-4">{{ successMessage }}</p>
      <p v-if="errorMessage" class="text-red-500 mt-4">{{ errorMessage }}</p>
    </div>

    <!-- Discount Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <div v-for="(discountGroup, index) in discountGroups" :key="index" class="p-4 bg-white rounded-lg shadow-md">
        <h3 class="text-xl font-bold text-blue-600">Giảm {{ discountGroup.header.percentage }}</h3>
        <p class="text-gray-800 font-medium mt-1">Đơn tối thiểu: {{ discountGroup.header.minOrder }}</p>
        <p class="text-gray-600 italic mt-1">{{ discountGroup.header.note }}</p>
        <div class="mt-4">
          <button v-for="(item, itemIndex) in discountGroup.items" :key="itemIndex"
                  class="flex items-center gap-1 px-3 py-1.5 rounded-md text-sm font-medium transition-all duration-200 bg-blue-100 text-blue-700 hover:bg-blue-200">
            <component :is="item.actions[0].icon" class="w-4 h-4" />
            {{ item.actions[0].text }}
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { 
  ShoppingBagIcon as ShopeeIcon,
  ShoppingCartIcon as LazadaIcon,
  TagIcon as TikiIcon,
  CubeIcon as SendoIcon,
  VideoCameraIcon as ShopeeVideoIcon,
  SparklesIcon as ShopNoiBatIcon,
  BookmarkIcon as LuuTrenBannerIcon,
  ArrowRightIcon as DenBannerIcon,
  ClipboardDocumentIcon as CopyMaIcon,
  BoltIcon as ApDungNgayIcon,
  FunnelIcon as FilterIcon
} from '@heroicons/vue/24/outline'

import { ref } from 'vue';
import axios from 'axios';

interface Platform {
  name: string;
  icon: any;
  iconColor: string;
}

interface DiscountHeader {
  percentage: string;
  minOrder: string;
  note: string;
}

interface DiscountAction {
  text: string;
  icon: any;
}

interface DiscountItem {
  shop: string;
  percentage: string;
  minOrder: string;
  note: string;
  expiry: string;
  actions: DiscountAction[];
}

interface DiscountGroup {
  header: DiscountHeader;
  items: DiscountItem[];
}

const platforms: Platform[] = [
  { name: 'Shopee', icon: ShopeeIcon, iconColor: 'text-orange-500' },
  { name: 'Lazada', icon: LazadaIcon, iconColor: 'text-red-500' },
  { name: 'Tiki', icon: TikiIcon, iconColor: 'text-blue-500' },
  { name: 'Sendo', icon: SendoIcon, iconColor: 'text-green-500' }
];

const discountGroups: DiscountGroup[] = [
  {
    header: {
      percentage: '30K',
      minOrder: '0đ',
      note: 'Mã áp dụng cho các sản phẩm Thời Trang... Xem chi tiết'
    },
    items: [
      {
        shop: 'Shopee Video',
        percentage: 'Giảm 20%',
        minOrder: 'Đi tối thiểu: 100.000đ',
        note: 'Lưu ý: Mã áp dụng cho các sản phẩm Làm Đẹp... Xem chi tiết',
        expiry: '3006',
        actions: [
          { text: 'Lưu trên banner', icon: LuuTrenBannerIcon },
          { text: 'Đến Banner', icon: DenBannerIcon }
        ]
      }
    ]
  },
  {
    header: {
      percentage: '20%',
      minOrder: '100.000đ',
      note: 'Mã áp dụng cho các sản phẩm trong... Xem chi tiết'
    },
    items: [
      {
        shop: 'Shop Nổi Bật',
        percentage: 'Giảm 15%',
        minOrder: 'Đi tối thiểu: 250.000đ - Còn: 90%',
        note: 'Lưu ý: Mã chỉ áp dụng cho các sản phẩm có ... Xem chi tiết',
        expiry: '1206',
        actions: [
          { text: 'Áp dụng ngay', icon: ApDungNgayIcon },
          { text: 'Copy Mã', icon: CopyMaIcon }
        ]
      },
      {
        shop: '',
        percentage: 'Giảm 15%',
        minOrder: 'Đi tối thiểu: 179.000đ - Còn: 28%',
        note: 'Lưu ý: Mã chỉ áp dụng cho các sản phẩm có ... Xem chi tiết',
        expiry: '1206',
        actions: [
          { text: 'Áp dụng ngay', icon: ApDungNgayIcon },
          { text: 'Copy Mã', icon: CopyMaIcon }
        ]
      },
      {
        shop: '',
        percentage: 'Giảm 20%',
        minOrder: 'Đi tối thiểu: 40.000đ - Còn: 78%',
        note: 'Lưu ý: Mã chỉ áp dụng cho các sản phẩm chọ... Xem chi tiết',
        expiry: '1206',
        actions: [
          { text: 'Áp dụng ngay', icon: ApDungNgayIcon },
          { text: 'Copy Mã', icon: CopyMaIcon }
        ]
      }
    ]
  },
  {
    header: {
      percentage: '15%',
      minOrder: '150.000đ - Còn: 27%',
      note: 'Lưu ý: Mã chỉ áp dụng cho các sản phẩm có ... Xem chi tiết'
    },
    items: [
      {
        shop: 'Shop Nổi Bật',
        percentage: 'Giảm 20%',
        minOrder: 'Đi tối thiểu: 50.000đ',
        note: 'Lưu ý: Mã áp dụng toàn sàn Lazada, Mô ... Xem chi tiết',
        expiry: '1506',
        actions: [
          { text: 'Áp dụng ngay', icon: ApDungNgayIcon },
          { text: 'Copy Mã', icon: CopyMaIcon }
        ]
      }
    ]
  }
];

const newFact = ref({ image: '', avatar: '' });
const successMessage = ref('');
const errorMessage = ref('');

const createFact = async () => {
  successMessage.value = '';
  errorMessage.value = '';

  try {
    const response = await axios.post('/api/facts', newFact.value, {
      headers: {
        Authorization: `Bearer ${localStorage.getItem('authToken')}` // Assuming you store the auth token in localStorage
      }
    });
    successMessage.value = response.data.message;
    newFact.value = { image: '', avatar: '' }; // Clear form
  } catch (error) {
    if (axios.isAxiosError(error) && error.response) {
      errorMessage.value = error.response.data.message || 'Failed to create fact.';
    } else {
      errorMessage.value = 'An unexpected error occurred.';
    }
  }
};
</script>

<style>
/* Smooth transitions */
button, tr {
  transition: all 0.2s ease;
}

/* Kiểu dáng thẻ */
.grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  gap: 1.5rem;
}
</style>