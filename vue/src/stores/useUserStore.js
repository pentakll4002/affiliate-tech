import { defineStore } from 'pinia'

export const useUserStore = defineStore('user', {
  state: () => {
    const storedUser = localStorage.getItem('user');
    const user = (storedUser && storedUser !== 'undefined') ? JSON.parse(storedUser) : null;
    const token = localStorage.getItem('token') || null;

    return {
      user,
      token,
    };
  },
  actions: {
    setUser(userData) {
      this.user = userData;
      localStorage.setItem('user', JSON.stringify(userData));
    },
    setToken(token) {
      this.token = token;
      localStorage.setItem('token', token);
    },
    clearUser() {
      this.user = null;
      this.token = null;
      localStorage.removeItem('user');
      localStorage.removeItem('token');
    },
  },
  getters: {
    isLoggedIn: (state) => !!state.user,
    username: (state) => state.user ? state.user.name : 'Guest',
  },
})

