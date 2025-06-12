import { createRouter, createWebHistory } from 'vue-router'
import Home from "@/pages/Home/Home.vue";
import QuicklyPage from '@/pages/QuicklyPage/QuicklyPage.vue';
import TrickPage from '@/pages/Trick/TrickPage.vue';
import FactCreate from '@/pages/Fact/FactCreate.vue';
import Login from '@/pages/Login/Login.vue'
import Register from '@/pages/Register/Register.vue'
import Forgot from '@/pages/Forgot/Forgot.vue'

const routes = [
  { path: '/', component: Home },
  { path: '/quickly-page', component: QuicklyPage },
  { path: '/trick', component: TrickPage },
  { path: '/fact', component: FactCreate },
  { path: '/login', component: Login },
  { path: '/register', component: Register },
  { path: '/forgot', component: Forgot }
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router