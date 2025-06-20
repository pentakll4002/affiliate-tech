// This file is created to provide a declaration for useUserStore.js and resolve TypeScript module not found errors. 

import { Store, StateTree } from 'pinia';

interface User {
  id: number;
  name: string;
  email: string;
  // Thêm các trường khác của user nếu có
}

interface UserStoreState extends StateTree {
  user: User | null;
  token: string | null;
}

interface UserStoreGetters {
  isLoggedIn: (state: UserStoreState) => boolean;
  username: (state: UserStoreState) => string;
}

interface UserStoreActions {
  setUser(userData: User): void;
  setToken(token: string): void;
  clearUser(): void;
}

export declare const useUserStore: () => Store<'user', UserStoreState, UserStoreGetters, UserStoreActions>; 