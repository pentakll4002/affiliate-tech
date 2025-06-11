import { createRouter, createWebHistory } from 'vue-router'
import Home from "@/pages/Home/Home.vue";
import QuicklyPage from '@/pages/QuicklyPage/QuicklyPage.vue'

const routes = [
  { path: '/', component: Home },
  { path: '/quickly-page', component: QuicklyPage }
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router