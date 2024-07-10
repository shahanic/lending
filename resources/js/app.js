import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js';
import App from '@/components/App.vue';
import { createPinia } from 'pinia';
const pinia = createPinia()


const app = createApp({});
app.use(pinia);
app.component('app', App);
app.mount('#app');