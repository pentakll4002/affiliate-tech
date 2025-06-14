import { createApp } from 'vue'
import App from './App.vue'
import router from './router/router'
import './assets/tailwind.css'
import { createPinia } from 'pinia'
import axios from 'axios'

const pinia = createPinia()

axios.interceptors.request.use(config => {
    const authToken = localStorage.getItem('authToken');
    if (authToken) {
        config.headers.Authorization = `Bearer ${authToken}`;
    }
    return config;
}, error => {
    return Promise.reject(error);
});

createApp(App).use(router).use(pinia).mount('#app')