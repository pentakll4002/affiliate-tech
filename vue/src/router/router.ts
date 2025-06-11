import { createRouter, createWebHistory } from 'vue-router';
import Home from './pages/About/Home.vue';
import QuicklyPage from '@/pages/About/QuicklyPage.vue';

const routes = [
    { path: '/', component: Home },
    { path: '/quickly-page', component: QuicklyPage }
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;