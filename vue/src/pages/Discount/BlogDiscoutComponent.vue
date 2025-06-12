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

    <!-- Discount Cards -->
    <div class="space-y-6">
      <div v-for="(discountGroup, index) in discountGroups" :key="index" class="space-y-4">
        <!-- Group Header -->
        <div class="p-4 bg-white rounded-lg shadow-sm">
          <h3 class="text-xl font-bold text-blue-600">Giảm {{ discountGroup.header.percentage }}</h3>
          <p class="text-gray-800 font-medium mt-1">Đơn tối thiểu: {{ discountGroup.header.minOrder }}</p>
          <p class="text-gray-600 italic mt-1">{{ discountGroup.header.note }}</p>
        </div>

        <!-- Discount Items -->
        <div class="overflow-hidden rounded-lg shadow-sm border border-gray-200">
          <table class="min-w-full divide-y divide-gray-200">
            <tbody class="bg-white divide-y divide-gray-200">
              <tr v-for="(item, itemIndex) in discountGroup.items" :key="itemIndex" 
                  class="hover:bg-gray-50 transition-colors duration-150">
                <td class="px-4 py-3 whitespace-nowrap">
                  <div class="flex items-center gap-3">
                    <ShopIcon class="w-5 h-5 text-blue-500" />
                    <span class="font-medium text-gray-700">{{ item.shop }}</span>
                  </div>
                </td>
                <td class="px-4 py-3">
                  <div>
                    <p class="font-bold text-gray-800">{{ item.percentage }}</p>
                    <p class="text-gray-600">{{ item.minOrder }}</p>
                    <p class="text-gray-500 text-sm italic">{{ item.note }}</p>
                  </div>
                </td>
                <td class="px-4 py-3 whitespace-nowrap">
                  <p class="text-gray-700 font-medium">HSD: {{ item.expiry }}</p>
                </td>
                <td class="px-4 py-3 whitespace-nowrap">
                  <div class="flex gap-2">
                    <button v-for="(action, actionIndex) in item.actions" :key="actionIndex"
                            class="flex items-center gap-1 px-3 py-1.5 rounded-md text-sm font-medium transition-all duration-200 hover:scale-105"
                            :class="actionIndex === 0 ? 'bg-blue-100 text-blue-700 hover:bg-blue-200' : 'bg-gray-800 text-white hover:bg-gray-700'">
                      <component :is="action.icon" class="w-4 h-4" />
                      {{ action.text }}
                    </button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
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
</script>

<style>
/* Smooth transitions */
button, tr {
  transition: all 0.2s ease;
}
</style>