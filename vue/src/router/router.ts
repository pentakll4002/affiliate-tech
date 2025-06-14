import { createRouter, createWebHistory } from 'vue-router'
import Home from "@/pages/Home/Home.vue";
import QuicklyPage from '@/pages/QuicklyPage/QuicklyPage.vue';
import TrickPage from '@/pages/Trick/TrickPage.vue';
import Login from '@/pages/Login/Login.vue'
import Register from '@/pages/Register/Register.vue'
import Forgot from '@/pages/Forgot/Forgot.vue'
import Review from '@/pages/Review/Review.vue'
import Post from '@/pages/Post/Post.vue'
import BlogDiscout from '@/pages/Discount/BlogDiscout.vue'
import FactCreate from '@/pages/Fact/FactCreate.vue'
import ArticleCreate from '@/pages/Article/ArticleCreate.vue'
import PostCreate from '@/pages/Post/PostCreate.vue'

const routes = [
  { path: '/', component: Home },
  { path: '/quickly-page', component: QuicklyPage },
  { path: '/trick', component: TrickPage },
  { path: '/fact', component: FactCreate, name: 'FactCreate' },
  { path: '/login', component: Login },
  { path: '/register', component: Register },
  { path: '/forgot', component: Forgot },
  { path: '/review', component: Review },
  { path: '/post-list', component: Post },
  { path: '/coupon-page', component: BlogDiscout },
  { path: '/create-article', component: ArticleCreate, name: 'CreateArticle' },
  { path: '/create-post', component: PostCreate, name: 'CreatePost' },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router