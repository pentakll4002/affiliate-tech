import { createApp } from 'vue'
import App from './App.vue'
import router from './router/router'
import './assets/tailwind.css'
import { createPinia } from 'pinia'
import axios from 'axios'

const pinia = createPinia()

axios.defaults.baseURL = 'http://127.0.0.1:8000';

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