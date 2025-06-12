<template>
    <div class="p-4 max-w-6xl mx-auto mt-6 space-y-4 bg-gray-50 rounded-xl">
    <h1 class="text-xl font-bold mb-2 text-gray-800">📋 Bài viết mới nhất</h1>
    <PostItem v-for="post in posts" :key="post.id" :post="post" />
    </div>
</template>
  
  <script setup lang="ts">
  import { defineComponent } from 'vue'
  
  interface PostType {
    id: number;
    title: string;
    category: string;
    author: string;
    date: string;
    replies: number;
    views: string;
    time: string;
    isNew?: boolean;
  }
  
  const posts: PostType[] = [
    {
      id: 1,
      title: 'Nitro Pro 13.58.0.1180 Full - Phần mềm chuyên nghiệp với các file PDF!',
      category: 'Phần Mềm',
      author: 'haimbh',
      date: '15/10',
      replies: 750,
      views: '127K',
      time: '4 phút trước',
      isNew: true,
    },
    {
      id: 2,
      title: 'Hỗ trợ tải nhanh FShare dưới mọi hình thức!',
      category: 'Tài Nguyên',
      author: 'thien25',
      date: '22/12',
      replies: 32,
      views: '4M',
      time: '8 phút trước',
    },
    {
      id: 3,
      title: 'Rufus 4.8 tạo Windows To Go nhanh hơn...',
      category: "Hiren's Boot",
      author: 'VN-ZNEWS',
      date: 'Hôm nay',
      replies: 0,
      views: '48',
      time: '50 phút trước',
      isNew: true,
    },
    {
      id: 4,
      title: 'Chia sẻ Key + Tài khoản phần mềm VPN tổng hợp',
      category: 'Phần Mềm',
      author: 'naroto',
      date: '18/10',
      replies: 6000,
      views: '2M',
      time: '14:42',
    },
  ]
  </script>
  
  <script lang="ts">
  import { defineComponent } from 'vue'
  
  export default defineComponent({
    name: 'PostList',
    components: {
      PostItem: defineComponent({
        name: 'PostItem',
        props: {
          post: {
            type: Object as () => {
              id: number
              title: string
              category: string
              author: string
              date: string
              replies: number
              views: string
              time: string
              isNew?: boolean
            },
            required: true,
          },
        },
        template: `
          <div
            class="bg-white rounded-2xl shadow-md px-6 py-4 flex justify-between items-center transform transition-all duration-300 hover:scale-[1.02] hover:shadow-xl"
          >
            <div class="flex items-center gap-3">
              <div v-if="post.isNew" class="relative">
                <div class="absolute w-2 h-2 bg-blue-400 rounded-full animate-ping"></div>
                <div class="w-2 h-2 bg-blue-500 rounded-full relative"></div>
              </div>
              <div class="space-y-1">
                <h2 class="text-lg font-semibold text-blue-700 hover:underline cursor-pointer transition duration-300">
                  {{ post.title }}
                </h2>
                <div class="text-sm text-gray-500">
                  {{ post.category }} • {{ post.author }} • {{ post.date }}
                </div>
              </div>
            </div>
            <div class="text-right text-sm text-gray-500 min-w-[80px]">
              <div class="font-semibold text-gray-700">🗨️ {{ post.replies }}</div>
              <div>👁️ {{ post.views }}</div>
              <div>🕒 {{ post.time }}</div>
            </div>
          </div>
        `,
      }),
    },
  })
  </script>
  